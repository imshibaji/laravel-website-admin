/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Customers Js
 */


 
var options = {
  chart: {
    height: 374,
    type: 'line',
    dropShadow: {
      enabled: true,
      top: 15,
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
  stroke: {
    width: 5,
    curve: 'smooth'
  },
  series: [{
    name: 'Likes',
    data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
  }],
  xaxis: {
    type: 'datetime',
    categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001', '4/11/2001', '5/11/2001', '6/11/2001'],
    axisBorder: {
      show: true,
      color: '#bec7e0',
    },  
    axisTicks: {
      show: true,
      color: '#bec7e0',
    },    
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      gradientToColors: ["#506ee4"],
      shadeIntensity: 1,
      type: 'horizontal',
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100, 100, 100]
    },
  },
  markers: {
    size: 4,
    opacity: 0.9,
    colors: ["#ffb822"],
    strokeColor: "#fff",
    strokeWidth: 2,
    style: 'inverted', // full, hollow, inverted
    hover: {
      size: 7,
    }
  },
  yaxis: {
    min: -10,
    max: 40,
    title: {
      text: 'Engagement',
    },
  },
  grid: {
    row: {
      colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.2
    },
    strokeDashArray: 4,
  },
  responsive: [{
    breakpoint: 600,
    options: {
      chart: {
        toolbar: {
          show: false
        }
      },
      legend: {
        show: false
      },
    }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#apex_line1"),
  options
);

chart.render();

// Datatable
$('#datatable').DataTable();

// bar
$('.peity-bar').each(function () {
  $(this).peity("bar", $(this).data());
});

 //donut
 $('.peity-donut').each(function () {
  $(this).peity("donut", $(this).data());
});

// line
$('.peity-line').each(function () {
  $(this).peity("line", $(this).data());
});
