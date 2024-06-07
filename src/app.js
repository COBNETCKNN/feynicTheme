jQuery(document).ready(function(jQuery){

    jQuery(document).scroll(function() {
  
        if (jQuery(document).scrollTop() > jQuery('header').height()) {
        jQuery('.navbar').addClass('fixed');
        jQuery('.content').css('margin-top', '54px');
      }
      else if (jQuery('.navbar').hasClass('fixed')) {
        jQuery('.navbar').removeClass('fixed');
        jQuery('.content').css('margin-top', '0px');
      }
    }); 

    // Footer accrediations
    jQuery(function () {
        jQuery(".accrediations_wrapper").slice(0, 2).show(); // Show the first 2 items initially
        jQuery("body").on('click touchstart', '.accrediations_loadMore__button', function (e) {
            e.preventDefault();
            jQuery(".accrediations_wrapper:hidden").slice(0, 30).slideDown();
            if (jQuery(".accrediations_wrapper:hidden").length == 0) {
                jQuery(".accrediations_loadMore__button").hide();
                jQuery(".accrediations_close").show(); // Show the close button when all items are visible
            }
        });

        jQuery("body").on('click touchstart', '.accrediations_close__button', function (e) {
            e.preventDefault();
            jQuery(".accrediations_wrapper").not(':lt(2)').slideUp(function() {
                jQuery(".accrediations_loadMore__button").show(); // Show the load more button again
                jQuery(".accrediations_close").hide(); // Hide the close button again
            });
        });
    });

    // Mobile Header Menu
    jQuery(".nav-toggler").click(function(){
        jQuery("#navigation").toggle("slide");
        jQuery('.navbar_grid__dropdown').addClass('open');
        jQuery('body').css('overflow', 'hidden');
    });

    jQuery(".nav_close__button").click(function(){
        jQuery('.navbar_grid__dropdown').removeClass('open');
        jQuery('body').css('overflow', 'auto');
    });

    // Mobile menu items
    jQuery('#whatWeDoButton').click(function(e) {
        e.preventDefault(); // Prevent the default action of the link
        var whatWeDoMobileItems = jQuery('#whatWeDo_mobileNav_items');

        if (whatWeDoMobileItems.is(':visible')) {
            whatWeDoMobileItems.slideToggle();; // 800ms duration with 'swing' easing
        } else {
            whatWeDoMobileItems.removeClass('hidden').hide().slideToggle();; // 800ms duration with 'swing' easing
        }
    });

    jQuery('#whoWeWorkWithButton').click(function(e) {
        e.preventDefault(); // Prevent the default action of the link
        var whoWeWorkWithMobileItems = jQuery('#whoWeWorkWith_mobileNav_items');

        if (whoWeWorkWithMobileItems.is(':visible')) {
            whoWeWorkWithMobileItems.slideToggle(); // 800ms duration with 'swing' easing
        } else {
            whoWeWorkWithMobileItems.removeClass('hidden').hide().slideToggle();; // 800ms duration with 'swing' easing
        }
    });

    // Owl carousel for Projects
    var owl = jQuery('.owl-projects');
    owl.owlCarousel({
        nav:true,
        autoplay: true,
        rewind: true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1,
                margin:50,
            },
            400:{
                items:1,
                margin:40,
            },
            600:{
                items:1,
                margin:40,
            },            
            960:{
                items: 3,
                margin: 70,
            },
            1200:{
                items: 3,
                margin: 70,
            },
            1440: {
                items: 3,
                margin: 70,
            }
        }
    });

    // Owl carousel for Blog Posts
    var owl = jQuery('.owl-blog');
    owl.owlCarousel({
        nav:true,
        loop: true,
        autoplay:false,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1,
                margin:50,
            },
            400:{
                items:1,
                margin:40,
            },
            600:{
                items:1,
                margin:40,
            },            
            960:{
                items: 4,
                margin:50,
            },
            1200:{
                items: 4,
                margin:50,
            },
            1440: {
                items: 4,
                margin:50,
            }
        }
    });

});

document.addEventListener('DOMContentLoaded', function () {
    var customSelect = document.querySelector('.custom-select');
    var customSelectTrigger = customSelect.querySelector('.custom-select-trigger');
    var customOptions = customSelect.querySelector('.custom-options');
    var customOptionElements = customSelect.querySelectorAll('.custom-option');
    var hiddenInput = document.getElementById('category-filter');

    customSelectTrigger.addEventListener('click', function () {
        customOptions.style.display = customOptions.style.display === 'block' ? 'none' : 'block';
    });

    customOptionElements.forEach(function (option) {
        option.addEventListener('click', function () {
            var value = this.getAttribute('data-value');
            var text = this.textContent;
            hiddenInput.value = value;
            customSelectTrigger.textContent = text;
            customOptions.style.display = 'none';

            // Trigger change event if needed
            var event = new Event('change');
            hiddenInput.dispatchEvent(event);
        });
    });

    document.addEventListener('click', function (event) {
        if (!customSelect.contains(event.target)) {
            customOptions.style.display = 'none';
        }
    });
});

document.querySelectorAll('.playlist-item').forEach(item => {
    item.addEventListener('click', function() {
        var videoId = this.getAttribute('data-video-id');
        var player = document.getElementById('vimeo-player');
        player.src = 'https://player.vimeo.com/video/' + videoId;
    });
});

AOS.init();

