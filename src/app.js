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

    // Owl carousel for Partners
    var owl = jQuery('.owl-partners');
    owl.owlCarousel({
        nav:true,
        loop: true,
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:2,
                margin:50,
            },
            400:{
                items:2,
                margin:40,
            },
            600:{
                items:2,
                margin:40,
            },            
            960:{
                items:5,
                margin:50,
            },
            1200:{
                items: 5,
                margin:50,
            },
            1440: {
                items: 5,
                margin:50,
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
                items:2,
                margin:50,
            },
            400:{
                items:2,
                margin:40,
            },
            600:{
                items:2,
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