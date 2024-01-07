import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import {renderEllipsisBullet} from "./utils.js"
import refs from "./refs"

const aboutSwiper = new Swiper('.about-swiper', {
    centeredSlides: true,
    spaceBetween: 5,
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    breakpoints: {
        992: {
            centeredSlides: false,
            slidesPerView: 4,
            spaceBetween: 15,
        }
    }
})

const clientsSwiperTop = new Swiper('.partners-swiper-top', {
    loop: true,
    allowTouchMove: false,
    speed: 4000,
    autoplay: {
        delay: 0,
        disableOnInteraction: true,
    },
    slidesPerView: 6,
    spaceBetween: 10,
});

const clientsSwiperBottom = new Swiper('.partners-swiper-bottom', {
    loop: true,
    allowTouchMove: false,
    speed: 4000,
    autoplay: {
        delay: 0,
        disableOnInteraction: true,
        reverseDirection: true
    },
    slidesPerView: 6,
    spaceBetween: 10,
});

const teamSwiper = new Swiper('.team-swiper', {
    spaceBetween: 7,
    slidesPerView: 1,
    grabCursor: true,
    navigation: {
        nextEl: ".team-section .next",
        prevEl: ".team-section .prev"
    },
    breakpoints: {
        576: {
            slidesPerView: 2
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1920: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
})

const blogPageSwiper = new Swiper('.blog-page-swiper', {
    spaceBetween: 70,
    slidesPerView: 1,
    autoHeight: true,
    allowTouchMove: false,
    navigation: {
        prevEl: ".blog-page-swiper .prev",
        nextEl: ".blog-page-swiper .next"
    },
    pagination: {
        el: '.blog-page-swiper .swiper-pagination',
        renderBullet: renderEllipsisBullet,
    },
    on: {
        slideChange: function () {
            this.pagination.render();
        },
    }
});

const handlePaginationClick = (e) => {
    if (e.target === e.currentTarget || e.target.classList.contains('swiper-pagination-bullet-ellipsis')) {
        return;
    }

    const slideIndex = $(e.target).text()
    blogPageSwiper.slideTo(slideIndex - 1, 0)
}

const handleNavigationClick = (e) => {
    if (e.currentTarget.classList.contains('first')) {
        blogPageSwiper.slideTo(0, 0);
    } else if (e.currentTarget.classList.contains('last')) {
        blogPageSwiper.slideTo(blogPageSwiper.slides.length - 1, 0);
    }
};

refs.blogSwiperNavigation.on("click", handleNavigationClick)
refs.blogSwiperPagination.on("click", handlePaginationClick)

const singleBlogSwiper = new Swiper('.single-blog-swiper', {
    spaceBetween: 35,
    slidesPerView: 3
})



