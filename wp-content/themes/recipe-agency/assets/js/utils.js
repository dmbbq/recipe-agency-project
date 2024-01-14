import throttle from "lodash.throttle";
import {WOW} from "wowjs/dist/wow.min";
import refs from "./refs";

const {bodyEl, swiperToInit} = refs;

const throttledHandleResize = throttle(handleResize, 200);

let currentBackdrop = null;

export const showBackdrop = (backdrop, hideOnResize = false) => {
    if (!backdrop) {
        return;
    }
    disableBodyScroll();

    backdrop.removeClass("is-hidden");
    backdrop.on("click", handleBackdropClick);
    $(window).on("keydown", handleKeyDown);
    currentBackdrop = backdrop;

    if (hideOnResize) {
        $(window).on("resize", throttledHandleResize);
    }
};

export const hideBackdrop = (backdrop) => {
    if (!backdrop) {
        return;
    }

    enableBodyScroll();

    backdrop.addClass("is-hidden");
    backdrop.removeClass("click", handleBackdropClick);
    $(window).off("keydown", handleKeyDown);
    $(window).off("resize", throttledHandleResize);

    currentBackdrop = null;
};

function handleBackdropClick(e) {
    if (e.target === e.currentTarget) {
        hideBackdrop(currentBackdrop);
    }
}

function handleKeyDown(e) {
    if (e.key === "Escape") {
        hideBackdrop(currentBackdrop);
    }
}

function handleResize() {
    const {innerWidth} = window;

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
    swiperToInit.each(function () {
        const currentElement = $(this);

        const replaceWithDiv = (selector, className) => {
            currentElement.find(selector).replaceWith(function () {
                return $('<div>', {
                    class: className,
                    html: $(this).html()
                });
            });
        };

        currentElement.find('div.gallery').addClass('swiper-wrapper');
        replaceWithDiv('dl', 'swiper-slide');
        currentElement.find('style, br').remove();
    });
}

initSwiperClasses();

export function renderEllipsisBullet(index, className) {
    const swiper = this;
    const total = swiper.slides.length;
    const current = swiper.realIndex;

    const numberOfBullets = 2;

    const isWithinRange = index >= current - numberOfBullets && index <= current + numberOfBullets;

    let isActive = (index === current) ? 'swiper-pagination-bullet-active fw-medium d-inline-flex align-items-center justify-content-center' : '';

    if (index === 0 || index === total - 1 || isWithinRange) {
        return `<span class="${className} fw-medium d-inline-flex align-items-center justify-content-center ${isActive}" role="button" tabindex="0" aria-label="Go to slide ${index + 1}">${index + 1}</span>`;
    }

    if (index === numberOfBullets && current - numberOfBullets > numberOfBullets - 1) {
        return '<span class="swiper-pagination-bullet-ellipsis fw-medium d-inline-flex align-items-center justify-content-center">...</span>';
    }

    if (index === total - numberOfBullets - 1 && current + numberOfBullets < total - numberOfBullets - 1) {
        return '<span class="swiper-pagination-bullet-ellipsis fw-medium d-inline-flex align-items-center justify-content-center">...</span>';
    }

    return '';
}

$('#single-case .hero-content__button').on("click", function () {
    const textToCopy = $('#single-case .hero-content__link a').attr('href');

    navigator.clipboard.writeText(textToCopy)
});


$("document").ready(function () {
    bodyEl.css("visibility", "visible");

    new WOW().init();

    replaceInputWithButton();
});
