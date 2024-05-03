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

  // Owl carousel for Partners
  var owl = jQuery('.owl-partners');
  owl.owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 2,
        margin: 50
      },
      400: {
        items: 2,
        margin: 40
      },
      600: {
        items: 2,
        margin: 40
      },
      960: {
        items: 5,
        margin: 50
      },
      1200: {
        items: 5,
        margin: 50
      },
      1440: {
        items: 5,
        margin: 50
      }
    }
  });

  // Owl carousel for Blog Posts
  var owl = jQuery('.owl-blog');
  owl.owlCarousel({
    nav: true,
    loop: true,
    autoplay: false,
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 2,
        margin: 50
      },
      400: {
        items: 2,
        margin: 40
      },
      600: {
        items: 2,
        margin: 40
      },
      960: {
        items: 4,
        margin: 50
      },
      1200: {
        items: 4,
        margin: 50
      },
      1440: {
        items: 4,
        margin: 50
      }
    }
  });
});
