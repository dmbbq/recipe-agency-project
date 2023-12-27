import refs from "./refs";
import { showBackdrop, hideBackdrop } from "./utils";
import throttle from "lodash.throttle";

const { menuBackdrop, menuButton, menuNavLinks } = refs;

const handleClick = () => {
    menuBackdrop.hasClass("is-hidden")
        ? showBackdrop(menuBackdrop)
        : hideBackdrop(menuBackdrop);
};

menuButton.on("click", throttle(handleClick, 400));
menuNavLinks.on("click", () => hideBackdrop(menuBackdrop));

const observer = new MutationObserver((mutationsList, observer) => {
    for (const mutation of mutationsList) {
        if (mutation.type === "attributes" && mutation.attributeName === "class") {
            menuButton.toggleClass("is-active");
        }
    }
});

observer.observe(menuBackdrop[0], { attributes: true });
