/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Project-task Js
 */


var options = {
  chart: {
    type: 'radialBar',
    height: 265,
    dropShadow: {
      enabled: true,
      top: 5,
      left: 0,
      bottom: 0,
      right: 0,
      blur: 5,
      color: '#45404a2e',
      opacity: 0.35
    },
  },
  plotOptions: {
    radialBar: {
      offsetY: -10,
      startAngle: 0,
      endAngle: 270,
      hollow: {
        margin: 5,
        size: '50%',
        background: 'transparent',  
      },
      track: {
        show: false,
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
  colors: ['#1ecab8', '#fd3c97', '#6d81f5'],
  stroke: {
    lineCap: 'round'
  },
  series: [71, 63, 100],
  labels: ['Completed', 'Active', 'Assigned'],
  legend: {
    show: true,
    floating: true,
    position: 'left',
    offsetX: -10,
    offsetY: 0,
  },
  responsive: [{
      breakpoint: 480,
      options: {
          legend: {
              show: true,
              floating: true,
              position: 'left',
              offsetX: 10,
              offsetY: 0,
          }
      }
  }]
}


var chart = new ApexCharts(
  document.querySelector("#task_status"),
  options
);

chart.render();
