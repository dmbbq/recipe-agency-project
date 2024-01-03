import throttle from "lodash.throttle";
import { WOW } from "wowjs/dist/wow.min";
import refs from "./refs";

const { bodyEl, swiperToInit } = refs;

const throttledHandleResize = throttle(handleResize, 200);

let currentBackdrop = null;

export const showBackdrop = (backdrop, hideOnResize = false) => {
  if (!backdrop) {
    return;
  }
  disableBodyScroll();

  backdrop.removeClass("is-hidden");
  backdrop.on("click", handleBackdropClick);
  window.on("keydown", handleKeyDown);
  currentBackdrop = backdrop;

  if (hideOnResize) {
    window.on("resize", throttledHandleResize);
  }
};

export const hideBackdrop = (backdrop) => {
  if (!backdrop) {
    return;
  }

  enableBodyScroll();

  backdrop.addClass("is-hidden");
  backdrop.removeClass("click", handleBackdropClick);
  window.off("keydown", handleKeyDown);
  window.off("resize", throttledHandleResize);

  currentBackdrop = null;
};

function handleBackdropClick(e) {
  if (e.target === e.currentTarget) {
    hideBackdrop(currentBackdrop);
  }
}

function handleKeyDown(e) {
  if (e.code === "Escape") {
    hideBackdrop(currentBackdrop);
  }
}

function handleResize() {
  const { innerWidth } = window;

  if (innerWidth >= 768) {
    hideBackdrop(currentBackdrop);
  }
}

export function enableBodyScroll() {
  bodyEl.css("overflow-y", "scroll");
}

export function disableBodyScroll() {
  bodyEl.css("overflow-y", "hidden");
}

const replaceInputWithButton = () => {
  const submitInput = $('.wpcf7-form [type="submit"]');
  const value = submitInput.val();

  submitInput.prop("outerHTML", function () {
    return this.outerHTML.replace(/input/gi, "button");
  });

  const newButton = $('.wpcf7-form [type="submit"]');
  newButton.text(value);
  newButton.attr("data-text", value);
};

const initSwiperClasses = () => {
  swiperToInit.each(function() {
    const currentElement = $(this);

    const replaceWithDiv = (selector, className) => {
      currentElement.find(selector).replaceWith(function () {
        return $('<div>', {
          class: className,
          html: $(this).html()
        });
      });
    };

    const galleryDlTag = currentElement.find('dl');

    if (galleryDlTag.length > 0) {
      replaceWithDiv('dl', 'swiper-slide');
      currentElement.find('style, br').remove();
      currentElement.find('div').addClass('swiper-wrapper');
    } else {
      replaceWithDiv('ul', 'swiper-wrapper');
      replaceWithDiv('li', 'swiper-slide');
    }
  });
}

initSwiperClasses();

const hideCtrl = () => {
  const teamSwiperSlides = $('.team-swiper .swiper-slide')

  if(teamSwiperSlides[0] && teamSwiperSlides.length < 5){
    $('.team-section .ctrl-list').css('display', 'none')
  }
}

$("document").ready(function () {
  bodyEl.css("visibility", "visible");

  new WOW().init();

  replaceInputWithButton();
  hideCtrl();
});
