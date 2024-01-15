import refs from "../refs"
import {showBackdrop, hideBackdrop} from "../utils"

const {feedbackButtons, feedbackBackdrop, menuBackdrop, feedbackCloseButton} = refs;

const handleClick = () => {
    if(!menuBackdrop.hasClass('is-hidden')){
        hideBackdrop(menuBackdrop);
    }
    showBackdrop(feedbackBackdrop);
}

feedbackButtons.on('click', handleClick)
feedbackCloseButton.on("click", () => hideBackdrop(feedbackBackdrop))
