$(document).ready(function ($) {
    let categories = ['all'];
    function loadPosts() {
        $('#cases .hero-content').html('<div class="loading-skeleton">Loading...</div>');

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                action: 'filter_posts',
                categories: categories
            },
            success: function (response) {
                $('#cases .hero-content').html(response);
            }
        });
    }

    loadPosts();

    $('.filter-list input[type="checkbox"]').on('change', function () {
        const category = $(this).val();
        const index = categories.indexOf(category);

        if (category === 'all' && $(this).prop('checked')) {
            $('.filter-list input[type="checkbox"]').not(this).prop('checked', false);
            categories = ['all'];
        } else {
            if ($('#all').prop("checked")) {
                $('#all').prop('checked', false);
                categories.splice(index, 1);
            }

            if ($(this).prop('checked') && index === -1) {
                categories.push(category);
            } else if (!$(this).prop('checked') && index !== -1) {
                categories.splice(index, 1);
            }
        }

        if (categories.length === 0) {
            categories.push('all');
            $('#all').prop('checked', true);
        }

        loadPosts();
    });
});