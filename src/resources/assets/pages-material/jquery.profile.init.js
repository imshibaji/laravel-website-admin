/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Profile Js
 */

$('.dropify').dropify();

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


(function($) {
    'use strict';
    $(function() {
    if ($("#bar").length) {
        var currentChartCanvas = $("#bar").get(0).getContext("2d");
        var currentChart = new Chart(currentChartCanvas, {
            type: 'bar',    
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Revenue",
                    backgroundColor: "#1ccab8",
                    borderColor: "transparent",
                    borderWidth: 2,
                    categoryPercentage: 0.5,
                    hoverBackgroundColor: "#00d8c2",
                    hoverBorderColor: "transparent",
                    data: [30, 39, 20, 31, 41, 25, 20, 39, 20, 31, 41, 25],
                }]        
            },
            
            options: {
                responsive: true,
                maintainAspectRatio: true,
                legend : {
                    display: false,
                    labels : {
                        fontColor : '#50649c'  
                    }
                },  
                tooltips: {
                    enabled: true,
                    callbacks: {
                        label: function(tooltipItems, data) {
                            return data.datasets[tooltipItems.datasetIndex].label +' $ ' + tooltipItems.yLabel + 'k';
                        }
                    }
                },
                
                scales: {
                    xAxes: [{
                        barPercentage: 0.35,
                        categoryPercentage: 0.4,
                        display: true,
                        gridLines: {
                            color: "transparent",
                            borderDash: [0],       
                            zeroLineColor: "transparent",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2] ,         
                        },
                        ticks: {
                            fontColor: '#a4abc5',
                            beginAtZero: true,
                            padding: 12,
                        },
                        
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "#8997bd29", 
                            borderDash: [3],
                            drawBorder: false,
                            drawTicks: false,
                            zeroLineColor: "#8997bd29",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2] ,           
                        },
                        ticks: {                           
                            fontColor: '#a4abc5',
                            beginAtZero: true,
                            padding: 12,
                            callback: function(value) {
                                if ( !(value % 10) ) {
                                    return '$' + value + 'k'
                                }
                            }
                        },                        
                    }]
                },
                
            }
        });
    }
    
    });
})(jQuery);

// light_datepick
new Lightpick({
    field: document.getElementById('light_datepick'),
    inline: true,                
});