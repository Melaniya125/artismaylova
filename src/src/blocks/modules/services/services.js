import $ from 'jquery';

const Services = class Services {
    constructor() {}
    initTabs() {
        $('.services-block-left-item').each(function() {
            $(this).on('click', function() {
                $('.services-block-left-item.isActive').removeClass('isActive');
                $(this).addClass('isActive');
                $('.services-block-right.isActive').slideUp('fast').removeClass('isActive');
                setTimeout(() => {
                    $(`.services-block-right[data-tab-id="${$(this).attr('data-opentab-id')}"]`).slideDown('fast').addClass('isActive');;
                }, 300)
            });
        })
    }
    init() {
        this.initTabs();
    }
}

export default Services;