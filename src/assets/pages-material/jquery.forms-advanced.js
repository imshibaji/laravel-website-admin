/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Form Advanced Js
 */





!function($) {
  "use strict";

  var AdvancedForm = function() {};
  
  AdvancedForm.prototype.init = function() {
    // Date range picker
    $('input[name="dates"]').daterangepicker({
        "alwaysShowCalendars": true,
      });
      $('.open_picker').show();
      
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    
      $('input[name="datetimes"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    
      $('input[name="birthday"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
      }, function(start, end, label) {
        var years = moment().diff(start, 'years');
        alert("You are " + years + " years old!");
      });
    
      var start = moment().subtract(29, 'days');
      var end = moment();
    
      function cb(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    
      $('#reportrange').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
             'Today': [moment(), moment()],
             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
             'This Month': [moment().startOf('month'), moment().endOf('month')],
             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
      }, cb);
    
      // Select2
        $(".select2").select2({
            width: '100%'
        });

        //colorpicker start
        $('#b_color-default, #b_color_rgb, #b_color_hsl').colorpicker();


        // MAterial Date picker    
        $('#mdate').bootstrapMaterialDatePicker({
            weekStart : 0, time: false 
        });
        $('#timepicker').bootstrapMaterialDatePicker({ 
            format : 'HH:mm', time: true, date: false 
        });
        $('#date-format').bootstrapMaterialDatePicker({ 
            format : 'dddd DD MMMM YYYY - HH:mm' 
        });  
        $('#min-date').bootstrapMaterialDatePicker({ 
            format : 'DD/MM/YYYY HH:mm', minDate : new Date() 
        });
        
        $('#date-end').bootstrapMaterialDatePicker
        ({
            weekStart: 0, format: 'DD/MM/YYYY HH:mm'
        });
        $('#date-start').bootstrapMaterialDatePicker
        ({
            weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
        }).on('change', function(e, date)
        {
            $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
        });

      
      //Bootstrap-MaxLength
      
      $('input#defaultconfig').maxlength({
          warningClass: "badge badge-info",
          limitReachedClass: "badge badge-warning"
      });

      $('input#thresholdconfig').maxlength({
          threshold: 20,
          warningClass: "badge badge-info",
          limitReachedClass: "badge badge-warning"
      });

      $('input#moreoptions').maxlength({
          alwaysShow: true,
          warningClass: "badge badge-success",
          limitReachedClass: "badge badge-danger"
      });

      $('input#alloptions').maxlength({
          alwaysShow: true,
          warningClass: "badge badge-success",
          limitReachedClass: "badge badge-danger",
          separator: ' out of ',
          preText: 'You typed ',
          postText: ' chars available.',
          validate: true
      });

      $('textarea#textarea').maxlength({
          alwaysShow: true,
          warningClass: "badge badge-info",
          limitReachedClass: "badge badge-warning"
      });

      $('input#placement').maxlength({
          alwaysShow: true,
          placement: 'top-left',
          warningClass: "badge badge-info",
          limitReachedClass: "badge badge-warning"
      });

      //Bootstrap-TouchSpin
      $(".vertical-spin").TouchSpin({
          verticalbuttons: true,
          verticalupclass: 'ion-plus-round',
          verticaldownclass: 'ion-minus-round',
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });

      $("input[name='demo1']").TouchSpin({
          min: 0,
          max: 100,
          step: 0.1,
          decimals: 2,
          boostat: 5,
          maxboostedstep: 10,
          postfix: '%',
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });
      $("input[name='demo2']").TouchSpin({
          min: -1000000000,
          max: 1000000000,
          stepinterval: 50,
          maxboostedstep: 10000000,
          prefix: '$',
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });
      $("input[name='demo3']").TouchSpin({
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });
      $("input[name='demo3_21']").TouchSpin({
          initval: 40,
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });
      $("input[name='demo3_22']").TouchSpin({
          initval: 40,
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });

      $("input[name='demo5']").TouchSpin({
          prefix: "pre",
          postfix: "post",
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });
      $("input[name='demo0']").TouchSpin({
          buttondown_class: 'btn btn-gradient-primary',
          buttonup_class: 'btn btn-gradient-primary'
      });    
  },
  //init
  $.AdvancedForm = new AdvancedForm, $.AdvancedForm.Constructor = AdvancedForm
}(window.jQuery),

//initializing
function ($) {
  "use strict";
  $.AdvancedForm.init();
}(window.jQuery);