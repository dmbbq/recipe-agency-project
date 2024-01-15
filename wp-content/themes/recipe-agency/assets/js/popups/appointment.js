import refs from "../refs"
import {showBackdrop, hideBackdrop} from "../utils"

const {appointmentButtons, appointmentBackdrop, menuBackdrop} = refs;

const handleClick = () => {
    if(!menuBackdrop.hasClass('is-hidden')){
        hideBackdrop(menuBackdrop);
    }
    console.log(appointmentBackdrop)
    showBackdrop(appointmentBackdrop);
}

appointmentButtons.on('click', handleClick)