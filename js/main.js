
jQuery(document).ready(function () {
        jQuery("#nav").slicknav();
        jQuery(".slider").bxSlider({
          mode: 'fade',
          captions: true,
        });
        jQuery(".owl-carousel").owlCarousel({
          autoplay: true,
          items:1,
        });
      });