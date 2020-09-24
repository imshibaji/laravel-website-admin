/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Dashboard Js
 */


  //colunm-1
  
  var options = {
    chart: {
        height: 340,
        type: 'bar',
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
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            endingShape: 'rounded',
            columnWidth: '25%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    colors: ["#0b7af3", '#26caa7'],
    series: [{
        name: 'New Visitors',
        data: [68, 44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Unique Visitors',
        data: [51, 76, 85, 101, 98, 87, 105, 91, 114, 94]
    },],
    xaxis: {
        categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        axisBorder: {
          show: true,
          color: '#bec7e0',
        },  
        axisTicks: {
          show: true,
          color: '#bec7e0',
        },    
    },
    legend: {
      offsetY: 6,
    },
    yaxis: {
        title: {
            text: 'Visitors',
        },
    },
    fill: {
        opacity: 1
  
    },
    // legend: {
    //     floating: true
    // },
    grid: {
        row: {
            colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.2,           
        },
        strokeDashArray: 4,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "" + val + "k"
            }
        }
    }
  }
  
  var chart = new ApexCharts(
    document.querySelector("#ana_dash_1"),
    options
  );
  
  chart.render();
  
  
  // traffice chart
  
  
  var optionsCircle = {
      chart: {
        type: 'radialBar',
        height: 280,
        offsetY: -30,
        offsetX: 20,
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
      plotOptions: {
        radialBar: {
          inverseOrder: true,      
          hollow: {
            margin: 5,
            size: '55%',
            background: 'transparent',
          },
          track: {
            show: true,
            background: '#ddd',
            strokeWidth: '10%',
            opacity: 1,
            margin: 5, // margin is in pixels
          },
    
          dataLabels: {
            name: {
                fontSize: '18px',
            },
            value: {
                fontSize: '16px',
                color: '#50649c',
            },
            
          }
        },
      },
      series: [71, 63],
      labels: ['Domestic', 'International'],
      legend: {
        show: true,
        position: 'bottom',
        offsetX: -40,
        offsetY: -5,
        formatter: function (val, opts) {
          return val + " - " + opts.w.globals.series[opts.seriesIndex] + '%'
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.5,
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          gradientToColors: ["#2ddab5", "#0b7af3", "#ffa100"]
        }
      },
      stroke: {
        lineCap: 'round'
      },
    }
    
    var chartCircle = new ApexCharts(document.querySelector('#circlechart'), optionsCircle);
    chartCircle.render();
    
    
    
    var iteration = 11
    
    function getRandom() {
      var i = iteration;
      return (Math.sin(i / trigoStrength) * (i / trigoStrength) + i / trigoStrength + 1) * (trigoStrength * 2)
    }
    
    function getRangeRandom(yrange) {
      return Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
    }
    
    window.setInterval(function () {
    
      iteration++;
    
      chartCircle.updateSeries([getRangeRandom({ min: 10, max: 100 }), getRangeRandom({ min: 10, max: 100 })])
    
    
    }, 3000)
  
  
  
  //Device-widget
  
  
  var options = {
    chart: {
        height: 270,
        type: 'donut',
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
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: 5
    },
    labels: [ "Tablet", "Desktop", "Mobile"],
    colors: ["#2ddab5", "#0b7af3", "#ffa100"],
   
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
    document.querySelector("#ana_device"),
    options
  );
  
  chart.render();


  // map

$('#usa').vectorMap({
  map: 'us_aea_en',
  backgroundColor: 'transparent',
  borderColor: '#818181',
  regionStyle: {
    initial: {
      fill: '#0b7af31c',
    }
  },
  series: {
    regions: [{
        values: {
            "US-VA": '#0b7af357',
            "US-PA": '#0b7af357',
            "US-TN": '#0b7af357',
            "US-WY": '#0b7af357',
            "US-WA": '#0b7af357',
            "US-TX": '#0b7af357',
        },
        attribute: 'fill',
    }]
  },
});