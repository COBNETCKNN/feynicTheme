jQuery(document).ready(function (jQuery) {
  jQuery(document).scroll(function () {
    if (jQuery(document).scrollTop() > jQuery('header').height()) {
      jQuery('.navbar').addClass('fixed');
      jQuery('.content').css('margin-top', '54px');
    } else if (jQuery('.navbar').hasClass('fixed')) {
      jQuery('.navbar').removeClass('fixed');
      jQuery('.content').css('margin-top', '0px');
    }
  });
});
