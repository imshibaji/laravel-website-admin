/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Agents Js
 */
//colunm-1
  
var options = {
  chart: {
      height: 200,
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
          columnWidth: '15%',
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
  colors: ["#2a76f4", "#1ecab8"],
  series: [{
      name: 'Users',
      data: [51, 76, 85, 101, 98, 87, 105]
  },],
  xaxis: {
      categories: ['Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      axisBorder: {
        show: true,
      },  
      axisTicks: {
        show: true,
      },    
  },
  legend: {
    offsetY: -8,
  },
  yaxis: {
      title: {
          text: 'Users'
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
  document.querySelector("#Agent_1"),
  options
);

chart.render();

var options = {
  chart: {
      height: 200,
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
          columnWidth: '15%',
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
  colors: ["#2a76f4", "#1ecab8"],
  series: [{
      name: 'Users',
      data: [105, 81, 56, 78, 101, 66, 76]
  },],
  xaxis: {
      categories: ['Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      axisBorder: {
        show: true,
      },  
      axisTicks: {
        show: true,
      },    
  },
  legend: {
    offsetY: -8,
  },
  yaxis: {
      title: {
          text: 'Users'
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
  document.querySelector("#Agent_2"),
  options
);

chart.render();

var options = {
  chart: {
      height: 200,
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
          columnWidth: '15%',
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
  colors: ["#2a76f4", "#1ecab8"],
  series: [{
      name: 'Users',
      data: [50, 55, 65, 75, 85, 95, 105]
  },],
  xaxis: {
      categories: ['Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      axisBorder: {
        show: true,
      },  
      axisTicks: {
        show: true,
      },    
  },
  legend: {
    offsetY: -8,
  },
  yaxis: {
      title: {
          text: 'Users'
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
  document.querySelector("#Agent_3"),
  options
);

chart.render();

