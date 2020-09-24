/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * CRM Dashboard Js
 */

var options = {
  chart: {
      height: 380,
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
      name: 'New Visits',
      data: [0,60,20,90,45,110,55,130,44,110,75,200]
  }, {
      name: 'Unique Visits',
      data: [0,45,10,75,35,94,40,115,30,105,65,190]
  }],

  xaxis: {
      type: 'month',
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
    position: 'top',
    horizontalAlign: 'right'
  },
}

var chart = new ApexCharts(
  document.querySelector("#liveVisits"),
  options
);

chart.render();


var options = {
  chart: {
      height: 300,
      type: 'radialBar',
      dropShadow: {
        enabled: true,
        top: 10,
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
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#b9c1d4',
            opacity: 0.3,            
          },
          dataLabels: {
              name: {
                  fontSize: '16px',
                  color: '#8997bd',
                  offsetY: 100
              },
              value: {
                  offsetY: 50,
                  fontSize: '22px',
                  color: '#8997bd',
                  formatter: function (val) {
                      return val + "%";
                  }
              }
          }
      }
  },
  fill: {
      gradient: {
          enabled: true,
          shade: 'dark',
          shadeIntensity: 0.15,
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 50, 65, 91]
      },
  },
  stroke: {
      dashArray: 4,
  },
  colors: ["#727cf5"],
  series: [67],
  labels: ['New Leads Target'],
  responsive: [{
      breakpoint: 380,
      options: {
        chart: {
          height: 280
        }
      }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#apex_radialbar3"),
  options
);

chart.render();