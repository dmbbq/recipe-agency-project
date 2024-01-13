import refs from "../refs";
import { showBackdrop, hideBackdrop } from "../utils";
import {loadPosts} from "../filterPosts";
import throttle from "lodash.throttle";

const { filterBackdrop, filterButton } = refs;
const handleClick = () => {
    filterBackdrop.hasClass("is-hidden")
        ? showBackdrop(filterBackdrop, true)
        : hideBackdrop(filterBackdrop);
};

filterButton.on("click", throttle(handleClick, 400));

const observer = new MutationObserver((mutationsList, observer) => {
    for (const mutation of mutationsList) {
        if (mutation.type === "attributes" && mutation.attributeName === "class") {
            filterButton.toggleClass("is-active");

            if(filterBackdrop.hasClass('is-hidden')) {
                loadPosts()
            }
        }
    }
});

observer.observe(filterBackdrop[0], { attributes: true });
