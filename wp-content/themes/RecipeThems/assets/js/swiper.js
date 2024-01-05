import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import {renderEllipsisBullet} from "./utils.js"
import refs from "./refs"

const aboutSwiper = new Swiper('.about-swiper', {
    spaceBetween: 15,
    slidesPerView: 4,
    grabCursor: true,
    loop: true
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
    spaceBetween: 20,
    slidesPerView: 4,
    grabCursor: true,
    navigation: {
        nextEl: ".team-section .next",
        prevEl: ".team-section .prev"
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

refs.blogSwiperPagination.on("click", handlePaginationClick)




