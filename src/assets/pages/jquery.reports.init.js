/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Reports Js
 */
//colunm-1
  
var options = {
  chart: {
      height: 420,
      type: 'bar',
      toolbar: {
          show: false
      },
      dropShadow: {
        enabled: true,
        top: 0,
        left: 5,
        bottom: 5,
        right: 0,
        blur: 5,
        color: '#45404a2e',
        opacity: 0.35
    },
  },
  plotOptions: {
      bar: {
          horizontal: false,
          endingShape: 'rounded',
          columnWidth: '25%',
      },
  },
  dataLabels: {
      enabled: false,
  },
  stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
  },
  colors: ["#1ccab8", '#2a76f4'],
  series: [{
      name: 'New Tickets',
      data: [68, 44, 55, 57, 56, 61, 58, 63, 60, 66] 
  }, {
      name: 'Solved Tickets',
      data: [51, 76, 85, 101, 98, 87, 105, 91, 114, 94]
  },],
  xaxis: {
      categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
      axisBorder: {
        show: true,
      },  
      axisTicks: {
        show: true,
      },    
  },
  legend: {
    offsetY: 6,
  },
  yaxis: {
      title: {
          text: 'Tickets'
      }
  },
  fill: {
      opacity: 1,
  },
  // legend: {
  //     floating: true
  // },
  grid: {
      row: {
          colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.2
      },
      borderColor: '#f1f3fa',
      strokeDashArray: 5,
  },
  tooltip: {
      y: {
          formatter: function (val) {
              return "" + val + ""
          }
      }
  }
}

var chart = new ApexCharts(
  document.querySelector("#reports_tickets"),
  options
);

chart.render();


// saprkline chart


var dash_spark_1 = {
    
  chart: {
      type: 'area',
      height: 60,
      sparkline: {
          enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 12,
        left: 0,
        bottom: 5,
        right: 0,
        blur: 2,
        color: '#45404a2e',
        opacity: 0.1
    },
  },
  stroke: {
      curve: 'smooth',
      width: 3
    },
  fill: {
      opacity: 1,
      gradient: {
        shade: '#2c77f4',
        type: "horizontal",
        shadeIntensity: 0.5,
        inverseColors: true,
        opacityFrom: 0.1,
        opacityTo: 0.1,
        stops: [0, 80, 100],
        colorStops: []
    },
  },
  series: [{
    data: [4, 8, 5, 10, 4, 16, 5, 11, 6, 11, 30, 10, 13, 4, 6, 3, 6]
  }],
  yaxis: {
      min: 0
  },
  colors: ['#7367f0'],
}
new ApexCharts(document.querySelector("#dash_spark_1"), dash_spark_1).render();


var dash_spark_2 = {
    
  chart: {
      type: 'area',
      height: 60,
      sparkline: {
          enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 12,
        left: 0,
        bottom: 5,
        right: 0,
        blur: 2,
        color: '#45404a2e',
        opacity: 0.1
    },
  },
  stroke: {
      curve: 'smooth',
      width: 3
    },
  fill: {
      opacity: 1,
      gradient: {
        shade: '#fd3c97',
        type: "horizontal",
        shadeIntensity: 0.5,
        inverseColors: true,
        opacityFrom: 0.1,
        opacityTo: 0.1,
        stops: [0, 80, 100],
        colorStops: []
    },
  },
  series: [{
    data: [4, 8, 5, 10, 4, 25, 5, 11, 6, 11, 5, 10, 3, 14, 6, 8, 6]
  }],
  yaxis: {
      min: 0
  },
  colors: ['#fd3c97'],
}
new ApexCharts(document.querySelector("#dash_spark_2"), dash_spark_2).render();

