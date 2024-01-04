import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import {renderEllipsisBullet} from "./utils.js"

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
  pagination: {
    el: '.blog-page-swiper .swiper-pagination',
    clickable: true,
    renderBullet: renderEllipsisBullet,
  },
  on: {
    slideChange: function () {
      this.pagination.render();
    },
  }
});


