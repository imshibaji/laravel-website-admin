/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Project Dashboard Js
 */


 
 //colunm-1
  
 var options = {
  chart: {
      height: 320,
      type: 'bar',
      toolbar: {
          show: false
      }
  },
  plotOptions: {
      bar: {
          horizontal: false,
          endingShape: 'rounded',
          columnWidth: '30%',
      },
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      show: true,
      width: 5,
      colors: ['transparent'],
  },
  colors: ["#2a76f4", '#1ccab8', "#ff9f43"],
  series: [{
      name: 'Total Budget',
      data: [68, 71, 65, 75, 80,]
  }, {
      name: 'Amount Used',
      data: [51, 42, 36, 61, 70,]
  },{
    name: 'Target Amount',
    data: [48, 55, 42, 60, 60,]
},],
  xaxis: {
      categories: ['Book My World','Organic Farming', 'Transfer money', 'Trading System', 'Banking'],
      axisBorder: {
        show: true,
        color: '#f7f8f9',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      },    
  },
  yaxis: {
    labels:{
      formatter:(function(val) {
        return "$" + val + "k"
      }),
    },
  },
  legend: {    
    offsetY: 6
  },
 
  fill: {
      opacity: 1

  },
  grid: {
      row: {
          colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.2
      },
      borderColor: '#f1f3fa',
      strokeDashArray: 4,
  },
  tooltip: {
      y: {
          formatter: function (val) {
              return "$" + val + "k"
          }
      }
  }
}

var chart = new ApexCharts(
  document.querySelector("#budgets_chart"),
  options
);

chart.render();


// Todo-task

$(function() {
  var todoListItem = $('.todo-list');
  var todoListInput = $('.todo-list-input');
  $('.add-new-todo-btn').on("click", function(event) {
    event.preventDefault();

    var item = $(this).prevAll('.todo-list-input').val();

    if (item) {
      todoListItem.append("<div class='todo-box'><i class='remove far fa-trash-alt'></i><div class='todo-task'><label class='ckbox'><input type='checkbox'/><span>" + item + "</span><i class='input-helper'></i></label></div></div>");
      todoListInput.val("");
    }

  });

  todoListItem.on('change', '.ckbox', function() {
    if ($(this).attr('checked')) {
      $(this).removeAttr('checked');
    } else {
      $(this).attr('checked', 'checked');
    }

    $(this).closest(".todo-box").toggleClass('completed');

  });

  todoListItem.on('click', '.remove', function() {
    $(this).parent().remove();
  });

}); 

//  Morris Area chart

$( function () {
    "use strict";

  // Performance Report

var options = {
    chart: {
      type: 'radialBar',
      height: 250,
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
});
 

