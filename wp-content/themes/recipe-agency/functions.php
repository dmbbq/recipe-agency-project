<?php

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');
add_action('after_setup_theme', 'theme_setup');
add_filter('upload_mimes', 'svg_upload_allow');
add_action('wpcf7_before_send_mail', 'send_message_to_telegram');
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
add_action('customize_register', 'additional_logo_customize_register');
add_action('wp_head', 'increment_post_views');
add_action( 'p2p_init', 'my_connection_types' );

function enqueue_scripts_and_styles(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js');
    wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.bundle.js', array('jquery'), null, true);
}

function theme_setup(){
    show_admin_bar(false);
    register_nav_menu('menu-header', 'Main menu');

    add_theme_support('custom-logo');
    add_theme_support('custom-logo-mob');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function get_image($name)
{
    echo get_template_directory_uri() . "/assets/images/" . $name;
}

function additional_logo_customize_register($wp_customize)
{
    $wp_customize->add_setting('additional_logo', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'additional_logo',
            array(
                'label' => __('Additional Logo', 'your_theme_textdomain'),
                'section' => 'title_tagline',
                'settings' => 'additional_logo',
            )
        )
    );
}

function custom_theme_logo()
{
    $additional_logo_url = get_theme_mod('additional_logo');
    $site_name = get_bloginfo('name');

    if ($additional_logo_url) {
        echo '<a href="' . esc_url(pll_home_url()) . '" class="custom-logo-link" rel="home" aria-current="page"><img class="custom-logo" alt="' . esc_attr($site_name) . '" src="' . esc_url($additional_logo_url) . '" alt="Additional Logo" decoding="async"></a>';
    }
}

function increment_post_views()
{
    if (is_single()) {
        $post_id = get_the_ID();

        $views = get_post_meta($post_id, 'post_views', true);
        $views = 0;
        $views = empty($views) ? 1 : $views + 1;
        update_post_meta($post_id, 'post_views', $views);
    }
}

function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'team_to_blog',
        'from' => 'blog',
        'to' => 'team'
    ) );
}

function translate_and_output($string_key, $group = 'Main Page')
{
    global $strings_to_translate;

    if (function_exists('pll__')) {
        echo pll__($strings_to_translate[$string_key], $group);
    } else {
        echo $strings_to_translate[$string_key];
    }
}

$strings_to_translate = array(
    'write_us' => 'Написати нам',
    'privacy_text' => 'Натискаючи на кнопку “Залишити заявку” ви погоджуєтесь з',
    'privacy_link' => 'умовами політики конфіденційності',
    'leave_statement' => 'Залишити заявку',
    'views' => 'переглядів',
    'keywords' => 'Ключові слова',
    'share' => 'Поділитись публікацією',
    'author' => 'Автор статті',
    'same_posts' => 'Cхожі публікації',
    'all_posts' => 'Всі публікації',
    'details' => 'Детальніше',
    'more_partners' => 'Більше клієнтів',
    'hide' => 'Приховати'
);

if (function_exists('pll_register_string')) {
    foreach ($strings_to_translate as $string_key => $string_value) {
        pll_register_string($string_key, $string_value, 'Main Page');
    }
}

function send_message_to_telegram($contact_form)
{
    $form_id = $contact_form->id();
    $telegram_token = '';
    $chat_id = '';
    $message = '';

    if ($form_id === 'formId') {

        $submission = WPCF7_Submission::get_instance();
        if ($submission) {
            $posted_data = $submission->get_posted_data();
            $message .= '<b>Контактные данные клиента:</b>' . PHP_EOL;
            $message .= PHP_EOL;
            $message .= '<b>Номер телфона:</b> ' . $posted_data['number'] . PHP_EOL;
            $message .= PHP_EOL;
        }
    } elseif ($form_id === 'formId') {

        $submission = WPCF7_Submission::get_instance();
        if ($submission) {
            $posted_data = $submission->get_posted_data();
            $message .= '<b>Контактные данные клиента:</b>' . PHP_EOL;
            $message .= PHP_EOL;
            $message .= '<b>Номер телфона:</b> ' . $posted_data['number'] . PHP_EOL;
            $message .= PHP_EOL;
        }
    }

    if (!empty($telegram_token) && !empty($chat_id) && !empty($message)) {
        $url = 'https://api.telegram.org/bot' . $telegram_token . '/sendMessage';
        $params = array(
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'HTML'
        );

        $query_string = http_build_query($params);
        $request_url = $url . '?' . $query_string;
        wp_remote_get($request_url);
    }
}

function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    if ($dosvg) {

        if (current_user_can('manage_options')) {

            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        else {
            $data['ext'] = false;
            $data['type'] = false;
        }
    }

    return $data;
}


