/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Rangeslider Js
 */


 
$(document).ready(function () {
  

  var $range1 = $("#range_01");
    var min = 100;
    var max = 1000;
    var marks = [700, 900];
    
    $range1.ionRangeSlider({
        skin: "modern",
        type: "single",
        min: min,
        max: max,
        from: 300,
        onStart: function(data) {
            addMarks(data.slider);
        }
    });
    
    function convertToPercent(num) {
        return (num - min) / (max - min) * 100;
    }
    
    function addMarks($slider) {
        var html = '';
        var left = 0;
        var left_p = "";
        var i;
    
        for (i = 0; i < marks.length; i++) {
            left = convertToPercent(marks[i]);
            left_p = left + "%";
            html += '<span class="showcase__mark" style="left: ' + left_p + '">';
            html += marks[i];
            html += '</span>';
        }
    
        $slider.append(html);
    }
  
  $("#range_02").ionRangeSlider({
      min: 100,
      skin: "modern",
      max: 1000,
      from: 550
  });
  
  $("#range_03").ionRangeSlider({
      type: "double",
      grid: true,
      skin: "modern",
      min: 0,
      max: 1000,
      from: 200,
      to: 800,
      prefix: "$"
  });
 
  $("#range_04").ionRangeSlider({
      type: "double",
      skin: "modern",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
  });
  
  $("#range_05").ionRangeSlider({
      type: "double",
      skin: "modern",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500,
      step: 250
  });
  
  $("#range_06").ionRangeSlider({
      grid: true,
      skin: "modern",
      from: 3,
      values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
  });
  
  $("#range_07").ionRangeSlider({
      grid: true,
      skin: "modern",
      min: 1000,
      max: 1000000,
      from: 200000,
      step: 1000,
      prettify_enabled: true
  });
  
  $("#range_08").ionRangeSlider({
      min: 100,
      skin: "modern",
      max: 1000,
      from: 550,
      disable: true
  });
  $("#range_09").ionRangeSlider({
      grid: true,
      skin: "flat",
      min: 18,
      max: 70,
      from: 30,
      prefix: "Age ",
      max_postfix: "+"
  });
  $("#range_10").ionRangeSlider({
      type: "double",
      skin: "round",
      min: 100,
      max: 200,
      from: 145,
      to: 155,
      prefix: "Weight: ",
      postfix: " million pounds",
      decorate_both: true
  });
  $("#range_11").ionRangeSlider({
    skin: "square",
    type: "single",
    grid: true,
    min: -90,
    max: 90,
    from: 0,
    postfix: "Â°"
    });
  $("#range_12").ionRangeSlider({
        skin: "sharp",
        type: "double",
        min: 1000,
        max: 2000,
        from: 1200,
        to: 1800,
        hide_min_max: true,
        hide_from_to: true,
        grid: true
    });
});