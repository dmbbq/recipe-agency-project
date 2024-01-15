import refs from "./refs";
import {hideBackdrop} from "./utils";

const casesSkeletonList = `
    <div class="skeleton-list row">
        ${Array(2).fill(`
            <div class="skeleton-list__item col-lg-6">
                <div class="skeleton-list__thumb"></div>
            </div>`).join('')}
    </div>`;

let page = 1;
let categories = ['all'];

export const loadPosts = () => {
    $('#cases .hero-content').html(casesSkeletonList);

    $.ajax({
        url: custom_vars.ajaxurl,
        type: 'post',
        data: {action: 'filter_posts', page, categories},
        success: (response) => {
            $('#cases .hero-content').html(response);
        },
    });
};

loadPosts();

const updateCategories = (category, isChecked) => {
    const index = categories.indexOf(category);
    const indexOfAll = categories.indexOf('all');

    if (category === 'all') {
        if (!isChecked) {
            $('.filter-list input[value="all"]').prop('checked', true);
            return;
        } else {
            $('.buttons-list__button.clean').hide();
            $('.filter-list input[value="all"]').prop('checked', true);
            $('.filter-list input[type="checkbox"]').not('[value="all"]').prop('checked', false);
            categories = ['all'];
        }
    } else {
        if (indexOfAll !== -1) {
            categories.splice(indexOfAll, 1);
            $('.filter-list input[value="all"]').prop('checked', false);
        }

        if (!$('.buttons-list__button.clean').is(':visible')) {
            $('.buttons-list__button.clean').show();
        }

        if (isChecked) {
            categories.push(category);
        } else {
            categories.splice(index, 1);
        }

        $(`.filter-list input[value="${category}"]`).not(this).prop('checked', isChecked);
    }

    if (categories.length === 0) {
        categories.push('all');
        $('.filter-list input[value="all"]').prop('checked', true);
    }
};

$('.filter-list input[type="checkbox"]').on('change', function () {
    page = 1;
    const category = $(this).val();
    const isChecked = $(this).prop('checked');

    updateCategories(category, isChecked);

    if (window.innerWidth >= 768) {
        loadPosts();
    }
});

$(document).on('click', '#cases .pagination button', function (e) {
    e.preventDefault();
    const action = $(this).attr('data-action');
    if (action === 'next') {
        page++;
    } else if (action === 'prev') {
        page--;
    } else if (action === 'first') {
        page = 1;
    } else if (action === 'last') {
        page = $(this).attr('data-last-page');
    } else {
        page = $(this).attr('data-page');
    }
    loadPosts();
});

$('.buttons-list__button.clean').on("click", function () {
    $('.filter-list input[value="all"]').prop('checked', true);
    $('.filter-list input[type="checkbox"]').not('[value="all"]').prop('checked', false);
    $(this).hide();
    categories = ['all'];
})

$('.buttons-list__button').not('.clean').on('click', function () {
    loadPosts();
    hideBackdrop(refs.filterBackdrop)
})
