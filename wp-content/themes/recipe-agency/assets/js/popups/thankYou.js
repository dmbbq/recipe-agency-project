import refs from "../refs"
import {showBackdrop, hideBackdrop} from "../utils"

const {thankYouBackdrop, thankYouCloseButton, appointmentBackdrop, feedbackBackdrop} = refs;

const handleSubmit = () => {
    if(!appointmentBackdrop.hasClass('is-hidden')){
        hideBackdrop(appointmentBackdrop);
    }
    if(!feedbackBackdrop.hasClass('is-hidden')){
        hideBackdrop(feedbackBackdrop);
    }
console.log(1)
    showBackdrop(thankYouBackdrop);
}

document.addEventListener("wpcf7mailsent", handleSubmit);

thankYouCloseButton.on("click", () => hideBackdrop(thankYouBackdrop));


