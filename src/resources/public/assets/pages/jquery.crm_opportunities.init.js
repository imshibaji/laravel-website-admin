/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Opportunities Js
 */

 //Apex-radialbar4

var options = {
  chart: {
    height: 180,
    type: 'radialBar',
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "60%",
        background: "#293450"
      },
      track: {
        dropShadow: {
          enabled: true,
          top: 2,
          left: 0,
          blur: 4,
          opacity: 0.15
        }
      },
      dataLabels: {
        name: {
          offsetY: -5,
          color: "#fff",
          fontSize: "13px",
        },
        value: {
          offsetY: 5,
          color: "#ff7d51",
          fontSize: "20px",
          show: true
        }
      }
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      type: 'horizontal',
      shadeIntensity: 0.5,
      gradientToColors: ["#cba280", "#2c3e50"],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100]
    }
  },
  series: [75],
  stroke: {
    lineCap: 'round'
  },
  labels: ['Leads Won'],

}

var chart = new ApexCharts(
  document.querySelector("#apex_radialbar4"),
  options
);

chart.render();