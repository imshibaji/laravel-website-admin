/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Gallery Js
 */
$("#portfolio_detail_tab").click(function(){
    setTimeout(function(){
        var $container = $('.projects-wrapper');
        // Initialize isotope 
        $container.isotope({
            filter: '*',
            layoutMode: 'masonry',
            animationOptions: {
                duration: 750,
                easing: 'linear'
            }
        });
  },300);
});

$(window).on('load', function() {
  // Filter 
  //PORTFOLIO FILTER 
  var $container = $('.projects-wrapper');
  var $filter = $('#filter');
  // Initialize isotope 
  $container.isotope({
      filter: '*',
      layoutMode: 'masonry',
      animationOptions: {
          duration: 750,
          easing: 'linear'
      }
  });
  // Filter items when filter link is clicked
  $filter.find('a').click(function() {
      var selector = $(this).attr('data-filter');
      $filter.find('a').removeClass('active');
      $(this).addClass('active');
      $container.isotope({
          filter: selector,
          animationOptions: {
              animationDuration: 750,
              easing: 'linear',
              queue: false,
          }
      });
      return false;
  });
  /*END*/
});
$('.mfp-image').magnificPopup({
  type: 'image',
  closeOnContentClick: true,
  mainClass: 'mfp-fade',
  gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
          // Will preload 0 - before current, and 1 after the current image 
  }
});
