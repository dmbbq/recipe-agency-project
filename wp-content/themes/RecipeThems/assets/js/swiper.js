import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const aboutSwiper = new Swiper('.about-swiper', {
  spaceBetween: 15,
  slidesPerView: 4,
  grabCursor: true,
  loop: true
})

const clientsSwiper = new Swiper('.clients-swiper', {
  freeMode: true,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    reverseDirection: true
  },
  slidesPerView: 5.5,
  spaceBetween: 32,
  speed: 4000
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


