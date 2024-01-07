$('.partners-button').on('click', function() {
    const $this = $(this);
    const hide = $this.find('.hide');
    const show = $this.find('.show');

    $('.partners-list__wrapper').slideToggle(250);
    show.toggle();
    hide.toggle();
});