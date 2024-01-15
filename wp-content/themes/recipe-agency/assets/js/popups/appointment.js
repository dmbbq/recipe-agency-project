import refs from "../refs"
import {showBackdrop, hideBackdrop} from "../utils"

const {appointmentButtons, appointmentBackdrop, menuBackdrop, appointmentCloseButton} = refs;

const handleClick = () => {
    if(!menuBackdrop.hasClass('is-hidden')){
        hideBackdrop(menuBackdrop);
    }
    showBackdrop(appointmentBackdrop);
}

appointmentButtons.on('click', handleClick)
appointmentCloseButton.on("click", () => hideBackdrop(appointmentBackdrop))
