/*
 Template Metrica - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 File: Sparkline chart
 */



$(document).ready(function() {
    var SparklineCharts = function() {
  
      $('#sparkline1').sparkline([20, 40, 30], {
        type: 'pie',
        height: '100',
        resize: true,
        sliceColors: ['#4d79f6', '#4ac7ec', '#eff2f9']
      });
  
      $("#sparkline2").sparkline([5,6,2,8,9,4,7,10,11,12,10,4,7,10], {
        type: 'bar',
        height: '100',
        barWidth: 10,
        barSpacing: 7,
        barColor: '#4d79f6'
      });
  
      $('#sparkline3').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
        type: 'bar',
        height: '100',
        barWidth: '10',
        resize: true,
        barSpacing: '7',
        barColor: '#4ac7ec'
      });
      $('#sparkline3').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
        type: 'line',
        height: '100',
        lineColor: '#4d79f6',
        fillColor: 'transparent',
        composite: true,
        lineWidth: 2,
        highlightLineColor: 'rgba(0,0,0,.1)',
        highlightSpotColor: 'rgba(0,0,0,.2)'
      });
  
      $("#sparkline4").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
        type: 'line',
        width: '100%',
        height: '100',
        lineColor: '#4d79f6',
        fillColor: 'transparent',
        spotColor: '#5468da',
        lineWidth: 2,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined
      });
      $('#sparkline5').sparkline([15, 23, 55, 35, 54, 45, 66, 47, 30], {
        type: 'line',
        width: '100%',
        height: '100',
        chartRangeMax: 50,
        resize: true,
        lineColor: '#ff5da0',
        fillColor: 'rgba(255, 93, 160, 0.3)',
        highlightLineColor: 'rgba(0,0,0,.1)',
        highlightSpotColor: 'rgba(0,0,0,.2)',
      });
  
      $('#sparkline5').sparkline([0, 13, 10, 14, 15, 10, 18, 20, 0], {
        type: 'line',
        width: '100%',
        height: '100',
        chartRangeMax: 40,
        lineColor: '#4d79f6',
        fillColor: 'rgba(77, 121, 246, 0.3)',
        composite: true,
        resize: true,
        highlightLineColor: 'rgba(0,0,0,.1)',
        highlightSpotColor: 'rgba(0,0,0,.2)',
      });
  
      $("#sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
        type: 'discrete',
        width: '250',
        height: '100',
        lineColor: '#ffffff'
      });
  
      $('#sparkline7').sparkline([10,12,12,9,7], {
        type: 'bullet',
        width: '100%',
        height: '100',
        targetColor: '#ff5da0',
        performanceColor: '#4ac7ec',
      });
      $('#sparkline8').sparkline([4,27,34,52,54,59,61,68,78,82,85,87,91,93,100], {
        type: 'box',
        width: '100%',
        height: '100',
        boxLineColor: '#4ac7ec',
        boxFillColor: '#f1f1f1',
        whiskerColor: '#4ac7ec',
        outlierLineColor: '#4ac7ec',
        medianColor: '#4ac7ec',
        targetColor: '#4ac7ec'
      });
      $('#sparkline9').sparkline([1,1,0,1,-1,-1,1,-1,0,0,1,1], {
        height: '100',
        width: '100%',
        type: 'tristate',
        posBarColor: '#4d79f6',
        negBarColor: '#4ac7ec',
        zeroBarColor: '#4d79f6',
        barWidth: 8,
        barSpacing: 3,
        zeroAxis: false
      });
  
    }
    var sparkResize;
  
    $(window).resize(function(e) {
      clearTimeout(sparkResize);
      sparkResize = setTimeout(SparklineCharts, 500);
    });
    SparklineCharts();
  
  });