import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import {renderEllipsisBullet} from "./utils.js"
import refs from "./refs"
import throttle from "lodash.throttle";

const aboutSwiper = new Swiper('.about-swiper', {
    centeredSlides: true,
    spaceBetween: 5,
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    breakpoints: {
        992: {
            centeredSlides: false,
            slidesPerView: 3,
        },
        1440: {
            slidesPerView: 4,
            centeredSlides: false,
            spaceBetween: 15
        }
    }
})

const partnersSwiperTop = new Swiper('.partners-swiper-top', {
    loop: true,
    allowTouchMove: false,
    speed: 4000,
    slidesPerView: 3,
    spaceBetween: 10,
    autoplay: {
        delay: 0,
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
        1440: {
            slidesPerView: 5,
        },
        1920: {
            slidesPerView: 6
        }
    }
});

const partnersSwiperBottom = new Swiper('.partners-swiper-bottom', {
    loop: true,
    allowTouchMove: false,
    slidesPerView: 3,
    spaceBetween: 10,
    speed: 4000,
    autoplay: {
        delay: 0,
        reverseDirection: true
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
        1440: {
            slidesPerView: 5,
        },
        1920: {
            slidesPerView: 6
        }
    }
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
        768: {
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

const blogPageSwiper = new Swiper('.blog-page-swiper.desk', {
    spaceBetween: 70,
    slidesPerView: 1,
    autoHeight: true,
    allowTouchMove: false,
    navigation: {
        prevEl: ".blog-page-swiper.desk .prev",
        nextEl: ".blog-page-swiper.desk .next"
    },
    pagination: {
        el: '.blog-page-swiper.desk .swiper-pagination',
        renderBullet: renderEllipsisBullet,
    },
    on: {
        slideChange: function () {
            this.pagination.render();
        },
    }
});

const blogPageSwiperMob = new Swiper('.blog-page-swiper.mob', {
    spaceBetween: 70,
    slidesPerView: 1,
    autoHeight: true,
    allowTouchMove: false,
    navigation: {
        prevEl: ".blog-page-swiper.mob .prev",
        nextEl: ".blog-page-swiper.mob .next"
    },
    pagination: {
        el: '.blog-page-swiper.mob .swiper-pagination',
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

    if ($(e.currentTarget.closest('.blog-page-swiper')).hasClass('desk')) {
        blogPageSwiper.slideTo(slideIndex - 1, 0)
    } else {
        blogPageSwiperMob.slideTo(slideIndex - 1, 0)
    }
}

const handleNavigationClick = (e) => {
    if ($(e.currentTarget).hasClass('first')) {
        blogPageSwiper.slideTo(0, 0);
    } else if ($(e.currentTarget).hasClass('last')) {
        blogPageSwiper.slideTo(blogPageSwiper.slides.length - 1, 0);
    }
};

refs.blogSwiperNavigation.on("click", handleNavigationClick)
refs.blogSwiperPagination.on("click", handlePaginationClick)

const singleBlogSwiper = new Swiper('.single-blog-swiper', {
    spaceBetween: 35,
    slidesPerView: 3
})




