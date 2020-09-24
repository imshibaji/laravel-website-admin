/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Ecommerce Dashboard Js
 */
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
                    backgroundColor: "#2a76f4",
                    borderColor: "transparent",
                    borderWidth: 2,
                    categoryPercentage: 0.5,
                    hoverBackgroundColor: "#506ee4",
                    hoverBorderColor: "transparent",
                    data: [30, 39, 20, 31, 41, 25, 20, 39, 20, 31, 41, 25],
                },]        
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


var options = {
  chart: {
      height: 350,
      type: 'line',
      stacked: true,
      toolbar: {
        show: false,
        autoSelected: 'zoom'
      },
      dropShadow: {
        enabled: true,
        top: 12,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: '#45404a2e',
        opacity: 0.35
      },
  },
  colors: ['#2a77f4', '#1ccab8', '#f02fc2'],
  dataLabels: {
      enabled: false
  },
  stroke: {
      curve: 'smooth',
      width: [4, 4],
      dashArray: [0, 3]
  },
  grid: {
    borderColor: "#45404a2e",
    padding: {
      left: 0,
      right: 0
    },
    strokeDashArray: 4,
  },
  markers: {
    size: 0,
    hover: {
      size: 0
    }
  },
  series: [{
      name: 'Revenue',
      data: [0,60,20,90,45,110,55,130,44,110,75,200]
  }, {
      name: 'New Orders',
      data: [0,45,10,75,35,94,40,115,30,105,65,190]
  }],

  xaxis: {
      type: 'datetime',
      categories: ["2020-09-19T00:00:00", "2020-09-19T01:30:00", "2020-09-19T02:30:00", "2020-09-19T03:30:00", "2020-09-19T04:30:00", "2020-09-19T05:30:00", "2020-09-19T06:30:00", "2020-09-19T07:30:00", "2020-09-19T08:30:00", "2020-09-19T09:30:00", "2020-09-19T10:30:00", "2020-09-19T11:30:00"],
      axisBorder: {
        show: true,
        color: '#45404a2e',
      },  
      axisTicks: {
        show: true,
        color: '#45404a2e',
      },                  
  },

  fill: {
    type: 'gradient',
    gradient: {
      gradientToColors: ['#F55555', '#B5AC49', '#6094ea']
    },
  },
  tooltip: {
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  },
  legend: {
    show: false,
    position: 'top',
    horizontalAlign: 'right'
  },
}

var chart = new ApexCharts(
  document.querySelector("#eco_dash"),
  options
);

chart.render();


var options = {
    series: [{
    name: 'Revenue',
    data: [31, 40, 28, 51, 42, 109, 100]
  },],
    chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  colors: ['#1eca87'],
  xaxis: {
    type: 'day',
    categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
  },
  yaxis: {
    labels: {
        formatter: function (value) {
            return "$" + value + "k";
        }
    },
  },
  legend: {
    show: false,
  },
  grid: {
    borderColor: "#45404a2e",
    padding: {
      left: 0,
      right: 0
    },
    strokeDashArray: 4,
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
};

var chart = new ApexCharts(document.querySelector("#Top_Week"), options);
chart.render();


//Device-widget


var options = {
    chart: {
        height: 235,
        type: 'donut',
        dropShadow: {
          enabled: true,
          top: 10,
          left: 0,
          bottom: 0,
          right: 0,
          blur: 2,
          color: '#45404a2e',
          opacity: 0.15
      },
    }, 
    plotOptions: {
      pie: {
        donut: {
          size: '85%'
        }
      }
    },
    dataLabels: {
      enabled: false,
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
   
    series: [10, 65, 25,],
    legend: {
        show: false,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: 5
    },
    labels: [ "Footwear", "Electronic", "Clothes"],
    colors: ["#1ccab8", '#506ee4', "#fd3c97"],
   
    responsive: [{
        breakpoint: 600,
        options: {
          plotOptions: {
              donut: {
                customScale: 0.2
              }
            },        
            chart: {
                height: 240
            },
            legend: {
                show: false
            },
        }
    }],
  
    tooltip: {
      y: {
          formatter: function (val) {
              return   val + " %"
          }
      }
    }
    
  }
  
  var chart = new ApexCharts(
    document.querySelector("#eco_categories"),
    options
  );
  
  chart.render();

   

  $('#usa').vectorMap({
    map: 'us_aea_en',
    backgroundColor: 'transparent',
    borderColor: '#818181',
    regionStyle: {
      initial: {
        fill: '#506ee424',
      }
    },
    series: {
      regions: [{
          values: {
              "US-VA": '#506ee452',
              "US-PA": '#506ee452',
              "US-TN": '#506ee452',
              "US-WY": '#506ee452',
              "US-WA": '#506ee452',
              "US-TX": '#506ee452',
          },
          attribute: 'fill',
      }]
    },
  });

