import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const aboutSwiper = new Swiper('.about-swiper', {
  spaceBetween: 15,
  slidesPerView: 4,
  grabCursor: true,
  loop: true
})