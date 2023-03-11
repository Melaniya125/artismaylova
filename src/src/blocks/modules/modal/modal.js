import $ from 'jquery';


const Modal = class Modal {
    constructor() {}
    addModalOpenHandler() {
        $('.modalOpener').each(function() {
            $(this).on('click', function() {
                $('.modal').addClass('isOpened');
            });
        })
    }
    addModalCloseHandler() {
        $('.modal__closer').each(function() {
            $(this).on('click', function() {
                $('.modal').removeClass('isOpened');
            });
        })
    }
    init() {
        this.addModalOpenHandler();
        this.addModalCloseHandler();
    }
}

export default Modal;