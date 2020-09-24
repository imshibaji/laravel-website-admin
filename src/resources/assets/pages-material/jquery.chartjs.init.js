/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Chart Js
 */


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },

    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
            datasets: [{
                label: "Conversion Rate",
                fill: false,
                backgroundColor: '#4d79f6',
                borderColor: '#4d79f6',
                data: [-90,-50,-70,20,-35,20,10,50,30,80]
            }, {
                label: "Average Sale Value",
                fill: false,
                backgroundColor: '#4ac7ec',
                borderColor: "#4ac7ec",
                borderDash: [5, 5],
                data: [10,-50,30,-80,50,-30,30,-80,10,-10]
            }]
        };

        var lineOpts = {
            responsive: true,
            // title:{
            //     display:true,
            //     text:'Chart.js Line Chart'
            // },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            },   
            scales: {
                xAxes: [{
                    display: true,
                    // scaleLabel: {
                    //     display: true,
                    //     labelString: 'Month'
                    // },
                    gridLines: {
                        color: 'rgba(137, 151, 189, 0.15)',
                    },
                    ticks: {
                        fontColor: '#8997bd'
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: 'rgba(137, 151, 189, 0.15)',                      
                    },
                    ticks: {
                        max: 100,
                        min: -100,
                        stepSize: 20,
                        fontColor: '#8997bd'
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

        //donut chart
        var donutChart = {
            labels: [
                "Bitcoin",
                "Ethereum",
                "Litecoin",
                "Dashcoin",
            ],
           
            datasets: [
                {
                    data: [80, 50, 100,121],
                    backgroundColor: [
                        "#f7931a",
                        "#4d79f6",
                        "#e0e7fd",
                        "#1c75bc",
                    ],
                    borderColor: "transparent",
                    innerRadius: "55%",
                    hoverBackgroundColor: [
                        "#f7931a",
                        "#4d79f6",
                        "#e0e7fd",
                        "#1c75bc",
                    ],
                    hoverBorderColor: "transparent",
                   
                }],
               
        };

        var donutOpts = {
            responsive: true,
            cutoutPercentage: 80,
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            }    
        };

       
        
        this.respChart($("#doughnut"),'Doughnut',donutChart, donutOpts);


        //Pie chart
        var pieChart = {
            labels: [
                "Desktops",
                "Tablets",
                "Mobiles",
                "Mobiles",
            ],
            datasets: [
                {
                    data: [80, 50, 100,121],
                    backgroundColor: [
                        "#4d79f6",
                        "#ff5da0",
                        "#e0e7fd",
                        "#4ac7ec",
                    ],
                    borderColor: "transparent",
                    hoverBackgroundColor: [
                        "#4d79f6",
                        "#ff5da0",
                        "#e0e7fd",
                        "#4ac7ec",
                    ],
                    hoverBorderColor: "#ffffff"
                }]
        };
        var pieChartOpts = {  
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            }      
        };
        this.respChart($("#pie"),'Pie',pieChart, pieChartOpts);


        //barchart
        var barChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "rgba(74, 199, 236, 0.4)",
                    borderColor: "#4ac7ec",
                    borderWidth: 2,
                    barPercentage: 0.3,
                    categoryPercentage: 0.5,
                    hoverBackgroundColor: "rgba(74, 199, 236, 0.7)",
                    hoverBorderColor: "#4ac7ec",
                    data: [65, 59, 80, 81, 56, 55, 40,20]
                }
            ]
        };
        var barOpts = {
            responsive: true,
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            },  
            scales: {
                xAxes: [
                    {
                        barPercentage: 0.8,
                        categoryPercentage: 0.4,
                        display: true,
                        gridLines: {
                            color: 'rgba(137, 151, 189, 0.15)',
                        },
                        ticks: {
                            fontColor: '#8997bd'
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(137, 151, 189, 0.15)',                        
                        },
                        ticks: {                           
                            fontColor: '#8997bd'
                        }
                    }]
            }
            
        };
        this.respChart($("#bar"),'Bar',barChart, barOpts);


        //radar chart
        var radarChart = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "Desktops",
                    backgroundColor: "rgba(77,121,246,0.3)",
                    borderColor: "#4d79f6",
                    pointBackgroundColor: "#4ac7ec",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "Tablets",
                    backgroundColor: "rgba(74,199,236,0.2)",
                    borderColor: "#4ac7ec",
                    pointBackgroundColor: "#4d79f6",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };
        var radarOpts = { 
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            },           
            scale: {                
                gridLines: {
                  color: 'rgba(137, 151, 189, 0.15)',
                },
                angleLines: {
                  color: 'rgba(137, 151, 189, 0.15)', // lines radiating from the center
                },
                pointLabels:{
                    fontColor:"#8997bd",
                 },
                ticks: {
                    backdropColor: '#e0e7fd',
                    fontColor: '#8997bd',
                    beginAtZero: true,
                    fontSize: 10,
                  }      
            },                
        };
        this.respChart($("#radar"),'Radar',radarChart, radarOpts);

        //Polar area chart
        var polarChart = {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    18
                ],
                backgroundColor: [
                    "#4d79f6",
                    "#ff5da0",
                    "#e0e7fd",
                    "#4ac7ec",
                ],
                borderColor: "transparent",
                label: 'My dataset', // for legend
                hoverBorderColor: "#ffffff"
            }],
            labels: [
                "Series 1",
                "Series 2",
                "Series 3",
                "Series 4"
            ]
        };
        var polarAreaOpts = {  
            legend : {
                labels : {
                  fontColor : '#8997bd'  
                }
            },        
            scale: {                
                gridLines: {
                  color: 'rgba(137, 151, 189, 0.15)',
                },
                angleLines: {
                  color: 'rgba(137, 151, 189, 0.15)', // lines radiating from the center
                }
              }            
        };
        this.respChart($("#polarArea"),'PolarArea',polarChart, polarAreaOpts);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);


