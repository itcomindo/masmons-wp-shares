window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {

        const wpsItemStat = jQuery('.wpsitem').data('show');
        // get all data show from .wpsitem. check foreach element it the value of data-show is disabled then remove the element
        jQuery('.wpsitem').each(function () {
            if (jQuery(this).data('show') === 'disabled') {
                jQuery(this).remove();
            }
        });



        const datascroll = jQuery('#wpspr.auto').data('scroll');
        jQuery('#wpspr.auto').slideUp();
        console.log(datascroll);

        // if user scroll down to percent of datascroll then slide down the wpspr
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > datascroll) {
                jQuery('#wpspr.auto').slideDown();
            } else {
                jQuery('#wpspr.auto').slideUp();
            }
        });








































        /*=========================jQuery End above this line=========================*/
    });
});