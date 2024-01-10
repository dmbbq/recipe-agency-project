const casesSkeletonList = `
    <div class="skeleton-list row">
        ${Array(2).fill(`
            <div class="skeleton-list__item col-lg-6">
                <div class="skeleton-list__thumb"></div>
            </div>`).join('')}
    </div>`;

$(document).ready(function ($) {
    let page = 1;
    let categories = ['all'];

    function loadPosts() {
        $('#cases .hero-content').html(casesSkeletonList);

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                action: 'filter_posts',
                page: page,
                categories: categories
            },
            success: function (response) {
                $('#cases .hero-content').html(response);
            }
        });
    }

    loadPosts();

    $('.filter-list input[type="checkbox"]').on('change', function () {
        page = 1;
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

    $(document).on('click', '.pagination button', function (e) {
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
});