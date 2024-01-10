import {renderEllipsisBullet} from "./utils";
import Swiper from "swiper/bundle";

let casesPageSwiper

const casesSkeletonList = `
    <div class="skeleton-list row">
        ${Array(4).fill(`
            <div class="skeleton-list__item col-lg-6">
                <div class="skeleton-list__thumb"></div>
            </div>`).join('')}
    </div>`;

$(document).ready(function ($) {
    let categories = ['all'];

    function initializeSwiper() {
         casesPageSwiper = new Swiper('.cases-page-swiper', {
            spaceBetween: 70,
            slidesPerView: 1,
            autoHeight: true,
            allowTouchMove: false,
            navigation: {
                prevEl: ".cases-page-swiper.desk .prev",
                nextEl: ".cases-page-swiper.desk .next"
            },
            pagination: {
                el: '.cases-page-swiper.desk .swiper-pagination',
                renderBullet: renderEllipsisBullet,
            },
            on: {
                slideChange: function () {
                    this.pagination.render();
                },
            }
        });
    }

    function loadPosts() {
        $('#cases .hero-content').html(casesSkeletonList);

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                action: 'filter_posts',
                categories: categories
            },
            success: function (response) {
                $('#cases .hero-content').html(response);
                if (casesPageSwiper && casesPageSwiper.destroy) {
                    casesPageSwiper.destroy();
                }

                initializeSwiper();
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