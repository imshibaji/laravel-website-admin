/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Module/App: Core Js
 */


/**
 * Components
 */
!function($) {
    "use strict";

    var Components = function() {};

    
    //initializing popover
    Components.prototype.initPopoverPlugin = function() {
        $.fn.popover && $('[data-toggle="popover"]').popover()
    },


    //initializing Slimscroll
    Components.prototype.initSlimScrollPlugin = function() {
        //You can change the color of scroll bar here
        $.fn.slimScroll &&  $(".slimscroll-alt").slimScroll({ position: 'right',size: "5px", color: '#98a6ad',wheelStep: 10});
    },

    //range slider
    Components.prototype.initRangeSlider = function() {
        $.fn.slider && $('[data-plugin="range-slider"]').slider({});
    },

    /* -------------
     * Form related controls
     */
    


    Components.prototype.initCounterUp = function() {
        var delay = $(this).attr('data-delay')?$(this).attr('data-delay'):100; //default is 100
        var time = $(this).attr('data-time')?$(this).attr('data-time'):1200; //default is 1200
         $('[data-plugin="counterup"]').each(function(idx, obj) {
            $(this).counterUp({
                delay: 100,
                time: 1200
            });
         });
     },


     //toast
    Components.prototype.initToast = function() {
        $.fn.toast && $('[data-toggle="toast"]').toast()
    },

    // Accordion-bg
    Components.prototype.initAccordionBg = function() {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header") .addClass("custom-accordion");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").addClass("custom-accordion");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").removeClass("custom-accordion");
        });
    },

    //bootstrap validation
    Components.prototype.initValidation = function() {
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
        }, false);
    },
    //initilizing
    Components.prototype.init = function() {
        var $this = this;
        this.initPopoverPlugin(),
        this.initSlimScrollPlugin(),
        this.initRangeSlider(),
        this.initCounterUp(),
        this.initToast(),
        this.initAccordionBg(),
        this.initValidation()
    },

    $.Components = new Components, $.Components.Constructor = Components

}(window.jQuery),
    //initializing main application module
function($) {
    "use strict";
    $.Components.init();
}(window.jQuery);

