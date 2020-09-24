/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Dashboard Js
 */

 // Tickets Data

  
 var options = {
  chart: {
      height: 325,
      type: 'pie',
      dropShadow: {
        enabled: true,
        top: 4,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: '#45404a2e',
        opacity: 0.35
      },
  }, 
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  series: [44, 55, 41, 17, 15],
  labels: ["Close", "Open", "Assigned", "Approved", "Resolved"],
  colors: ["#0abb87", "#7367f0", "#ff9f43", "#fd3c97", "#41cbd8"],
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
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#Tickets_Data"),
  options
);

chart.render();


// apex-bar-1

var options = {
  chart: {
      height: 295,
      type: 'bar',
      toolbar: {
          show: false
      },
      dropShadow: {
          enabled: true,
          top: 5,
          left: 5,
          bottom: 0,
          right: 0,
          blur: 5,
          color: '#45404a2e',
          opacity: 0.35
      },
  },
  plotOptions: {
    bar: {
      barHeight: '50%',
      distributed: false,
      horizontal: true,
      endingShape: 'rounded',
    }
  },
  dataLabels: {
    enabled: false,    
  },
  series: [{
      data: [40, 48, 70, 50, 80, 60, 90],
  }],
colors: ['#506ee4'],
  yaxis: {
      axisBorder: {
          show: true,
          color: '#bec7e0',
        },  
        axisTicks: {
          show: true,
          color: '#bec7e0',
      }, 
  },
  xaxis: {
      categories: ['Upgrade Req.', 'Installation Req.', 'Code Req.', 'Bug Fix', 'Production', 'Web', 'Insurance'],        
  },
  stroke: {
    show: true,
    width: 1,
    colors: ['#fff']
  },
  states: {
      hover: {
          filter: 'none'
      }
  },
  grid: {
      borderColor: '#f1f3fa',
      strokeDashArray: 4,
  }
}

var chart = new ApexCharts(
  document.querySelector("#apex_bar1"),
  options
);

chart.render();


// Datatable
$('#datatable').DataTable();

$(document).ready(function() {
  $('#datatable-tickets').DataTable( {
      columnDefs: [ {
          orderable: false,
          className: 'select-checkbox',
          targets:   0
      } ],
      select: {
          style:    'os',
          selector: 'td:first-child'
      },
      order: [[ 1, 'asc' ]]
  } );
} );