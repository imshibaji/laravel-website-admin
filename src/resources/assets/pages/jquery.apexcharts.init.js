/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Apexcharts Js
 */


   
var options = {
    chart: {
      height: 374,
      type: 'line',
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
    title: {
      text: 'Social Media',
      align: 'left',
      style: {
        fontSize: "14px",
        color: '#8997bd'
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        gradientToColors: ['#43cea2'],
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
      colors: ["#ffbc00"],
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
      floating: true,
      title: {
        text: 'Engagement',
      },
    },
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#185a9d'
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

    //line-2
    
var options = {
    chart: {
      height: 380,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      },
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
    colors: ['#f6d365', '#0acf97'],
    dataLabels: {
      enabled: true,
    },
    stroke: {
      width: [3, 3],
      curve: 'smooth'
    },
    series: [{
      name: "High - 2018",
      data: [28, 29, 33, 36, 32, 32, 33]
    },
    {
      name: "Low - 2018",
      data: [12, 11, 14, 18, 17, 13, 13]
    }
    ],
    title: {
      text: 'Average High & Low Temperature',
      align: 'left',
      style: {
        fontSize: "14px",
        color: '#8997bd'
      }
    },
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#f1f3fa'
    },
    markers: {
      style: 'inverted',
      size: 6
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      },    
      title: {
        text: 'Month'
      }
    },
    yaxis: {
      title: {
        text: 'Temperature'
      },
      min: 5,
      max: 40
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      floating: true,
      offsetY: -25,
      offsetX: 5
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
    document.querySelector("#apex_line2"),
    options
  );
  
  chart.render();

    // line-3
  
var ts2 = 1484418600000;
var dates = [];
var spikes = [5, -5, 3, -3, 8, -8]
for (var i = 0; i < 120; i++) {
  ts2 = ts2 + 86400000;
  var innerArr = [ts2, dataSeries[1][i].value];
  dates.push(innerArr)
}

var options = {
  chart: {
    type: 'area',
    stacked: false,
    height: 380,
    zoom: {
      enabled: true
    },
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
    line: {
      curve: 'smooth',

    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [3]
  },
  series: [{
    name: 'XYZ MOTORS',
    data: dates
  }],
  markers: {
    size: 0,
    style: 'full',
  },
  colors: ['#fa5c7c'],
  title: {
    text: 'Stock Price Movement',
    align: 'left',
    style: {
      fontSize: "14px",
      color: '#8997bd'
    }
  },
  grid: {
    row: {
      colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.2
    },
    borderColor: '#f1f3fa'
  },
  fill: {
    gradient: {
      enabled: true,
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.5,
      opacityTo: 0.1,
      stops: [0, 70, 80, 100]
    },
  },
  yaxis: {
    min: 20000000,
    max: 250000000,
    labels: {
      formatter: function (val) {
        return (val / 1000000).toFixed(0);
      },
    },
    title: {
      text: 'Price'
    },
  },
  xaxis: {
    type: 'datetime',
    axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      },    
  },

  tooltip: {
    shared: false,
    y: {
      formatter: function (val) {
        return (val / 1000000).toFixed(0)
      }
    }
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
  document.querySelector("#apex_line3"),
  options
);

chart.render();

// Apex Area///////



var ts1 = 1388534400000;
var ts2 = 1388620800000;
var ts3 = 1389052800000;

var dataSet = [[],[],[]];

for(var i=0; i<12; i++) {
    ts1 = ts1 + 86400000;
    var innerArr = [ts1, dataSeries[2][i].value];
    dataSet[0].push(innerArr)
}
for(var i=0; i<18; i++) {
    ts2 = ts2 + 86400000;
    var innerArr = [ts2, dataSeries[1][i].value];
    dataSet[1].push(innerArr)
}
for(var i=0; i<12; i++) {
    ts3 = ts3 + 86400000;
    var innerArr = [ts3, dataSeries[0][i].value];
    dataSet[2].push(innerArr)
}

 var options = {
  chart: {
    type: 'area',
    stacked: false,
    height: 350,
    zoom: {
      enabled: false
    },
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
    line: {
      curve: 'smooth',
    }
  },
  dataLabels: {
    enabled: false
  },
  series: [{
    name: 'PRODUCT A',
    data: dataSet[0]
  }, {
    name: 'PRODUCT B',
    data: dataSet[1]
  }, {
    name: 'PRODUCT C',
    data: dataSet[2]
  }],
  markers: {
    size: 0,
    style: 'full',
  },
  fill: {
    type: 'gradient',
    gradient: {
        shadeIntensity: 1,
        inverseColors: false,
        opacityFrom: 0.45,
        opacityTo: 0.05,
        stops: [20, 100, 100, 100]
      },
},
  yaxis: {
    labels: {
        style: {
            color: '#8e8da4',
        },
        offsetX: 0,
        formatter: function(val) {
          return (val / 1000000).toFixed(2);
        },
    },
    axisBorder: {
        show: false,
    },
    axisTicks: {
        show: false
    }
  },
  xaxis: {
    type: 'datetime',
    tickAmount: 8,
    min: new Date("01/01/2014").getTime(),
    max: new Date("01/20/2014").getTime(),
    labels: {
        rotate: -15,
        rotateAlways: true,
        formatter: function(val, timestamp) {
          return moment(new Date(timestamp)).format("DD MMM YYYY")
      }
    },
    axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      },    
  },
  title: {
    text: 'Irregular Data in Time Series',
    align: 'left',
    offsetX: 14,
    style: {
      fontSize: "14px",
      color: '#8997bd'
    }
  },
  colors: ['#f93b7a', '#00bcd4','#fbb624'],
  tooltip: {
    shared: true
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right',
    offsetX: -6
  }
}

 var chart = new ApexCharts(
      document.querySelector("#apex_area1"),
      options
  );
  
  chart.render();

  //Area-2
  $(document).ready(function() {
    var options = {
        annotations: {
        yaxis: [{
            y: 30,
            borderColor: '#999',
            label: {
            show: true,
            text: 'Support',
            style: {
                color: "#fff",
                background: '#00E396'
            }
            }
        }],
        xaxis: [{
            x: new Date('14 Nov 2012').getTime(),
            borderColor: '#999',
            yAxisIndex: 0,
            label: {
            show: true,
            text: 'Rally',
            style: {
                color: "#fff",
                background: '#775DD0'
            }
        },
        }]
        },
        chart: {
        type: 'area',
        height: 350,
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
        dataLabels: {
        enabled: false
        },
        series: [{
            data:[
            [1327359600000,30.95],
            [1327446000000,31.34],
            [1327532400000,31.18],
            [1327618800000,31.05],
            [1327878000000,31.00],
            [1327964400000,30.95],
            [1328050800000,31.24],
            [1328137200000,31.29],
            [1328223600000,31.85],
            [1328482800000,31.86],
            [1328569200000,32.28],
            [1328655600000,32.10],
            [1328742000000,32.65],
            [1328828400000,32.21],
            [1329087600000,32.35],
            [1329174000000,32.44],
            [1329260400000,32.46],
            [1329346800000,32.86],
            [1329433200000,32.75],
            [1329778800000,32.54],
            [1329865200000,32.33],
            [1329951600000,32.97],
            [1330038000000,33.41],
            [1330297200000,33.27],
            [1330383600000,33.27],
            [1330470000000,32.89],
            [1330556400000,33.10],
            [1330642800000,33.73],
            [1330902000000,33.22],
            [1330988400000,31.99],
            [1331074800000,32.41],
            [1331161200000,33.05],
            [1331247600000,33.64],
            [1331506800000,33.56],
            [1331593200000,34.22],
            [1331679600000,33.77],
            [1331766000000,34.17],
            [1331852400000,33.82],
            [1332111600000,34.51],
            [1332198000000,33.16],
            [1332284400000,33.56],
            [1332370800000,33.71],
            [1332457200000,33.81],
            [1332712800000,34.40],
            [1332799200000,34.63],
            [1332885600000,34.46],
            [1332972000000,34.48],
            [1333058400000,34.31],
            [1333317600000,34.70],
            [1333404000000,34.31],
            [1333490400000,33.46],
            [1333576800000,33.59],
            [1333922400000,33.22],
            [1334008800000,32.61],
            [1334095200000,33.01],
            [1334181600000,33.55],
            [1334268000000,33.18],
            [1334527200000,32.84],
            [1334613600000,33.84],
            [1334700000000,33.39],
            [1334786400000,32.91],
            [1334872800000,33.06],
            [1335132000000,32.62],
            [1335218400000,32.40],
            [1335304800000,33.13],
            [1335391200000,33.26],
            [1335477600000,33.58],
            [1335736800000,33.55],
            [1335823200000,33.77],
            [1335909600000,33.76],
            [1335996000000,33.32],
            [1336082400000,32.61],
            [1336341600000,32.52],
            [1336428000000,32.67],
            [1336514400000,32.52],
            [1336600800000,31.92],
            [1336687200000,32.20],
            [1336946400000,32.23],
            [1337032800000,32.33],
            [1337119200000,32.36],
            [1337205600000,32.01],
            [1337292000000,31.31],
            [1337551200000,32.01],
            [1337637600000,32.01],
            [1337724000000,32.18],
            [1337810400000,31.54],
            [1337896800000,31.60],
            [1338242400000,32.05],
            [1338328800000,31.29],
            [1338415200000,31.05],
            [1338501600000,29.82],
            [1338760800000,30.31],
            [1338847200000,30.70],
            [1338933600000,31.69],
            [1339020000000,31.32],
            [1339106400000,31.65],
            [1339365600000,31.13],
            [1339452000000,31.77],
            [1339538400000,31.79],
            [1339624800000,31.67],
            [1339711200000,32.39],
            [1339970400000,32.63],
            [1340056800000,32.89],
            [1340143200000,31.99],
            [1340229600000,31.23],
            [1340316000000,31.57],
            [1340575200000,30.84],
            [1340661600000,31.07],
            [1340748000000,31.41],
            [1340834400000,31.17],
            [1340920800000,32.37],
            [1341180000000,32.19],
            [1341266400000,32.51],
            [1341439200000,32.53],
            [1341525600000,31.37],
            [1341784800000,30.43],
            [1341871200000,30.44],
            [1341957600000,30.20],
            [1342044000000,30.14],
            [1342130400000,30.65],
            [1342389600000,30.40],
            [1342476000000,30.65],
            [1342562400000,31.43],
            [1342648800000,31.89],
            [1342735200000,31.38],
            [1342994400000,30.64],
            [1343080800000,30.02],
            [1343167200000,30.33],
            [1343253600000,30.95],
            [1343340000000,31.89],
            [1343599200000,31.01],
            [1343685600000,30.88],
            [1343772000000,30.69],
            [1343858400000,30.58],
            [1343944800000,32.02],
            [1344204000000,32.14],
            [1344290400000,32.37],
            [1344376800000,32.51],
            [1344463200000,32.65],
            [1344549600000,32.64],
            [1344808800000,32.27],
            [1344895200000,32.10],
            [1344981600000,32.91],
            [1345068000000,33.65],
            [1345154400000,33.80],
            [1345413600000,33.92],
            [1345500000000,33.75],
            [1345586400000,33.84],
            [1345672800000,33.50],
            [1345759200000,32.26],
            [1346018400000,32.32],
            [1346104800000,32.06],
            [1346191200000,31.96],
            [1346277600000,31.46],
            [1346364000000,31.27],
            [1346709600000,31.43],
            [1346796000000,32.26],
            [1346882400000,32.79],
            [1346968800000,32.46],
            [1347228000000,32.13],
            [1347314400000,32.43],
            [1347400800000,32.42],
            [1347487200000,32.81],
            [1347573600000,33.34],
            [1347832800000,33.41],
            [1347919200000,32.57],
            [1348005600000,33.12],
            [1348092000000,34.53],
            [1348178400000,33.83],
            [1348437600000,33.41],
            [1348524000000,32.90],
            [1348610400000,32.53],
            [1348696800000,32.80],
            [1348783200000,32.44],
            [1349042400000,32.62],
            [1349128800000,32.57],
            [1349215200000,32.60],
            [1349301600000,32.68],
            [1349388000000,32.47],
            [1349647200000,32.23],
            [1349733600000,31.68],
            [1349820000000,31.51],
            [1349906400000,31.78],
            [1349992800000,31.94],
            [1350252000000,32.33],
            [1350338400000,33.24],
            [1350424800000,33.44],
            [1350511200000,33.48],
            [1350597600000,33.24],
            [1350856800000,33.49],
            [1350943200000,33.31],
            [1351029600000,33.36],
            [1351116000000,33.40],
            [1351202400000,34.01],
            [1351638000000,34.02],
            [1351724400000,34.36],
            [1351810800000,34.39],
            [1352070000000,34.24],
            [1352156400000,34.39],
            [1352242800000,33.47],
            [1352329200000,32.98],
            [1352415600000,32.90],
            [1352674800000,32.70],
            [1352761200000,32.54],
            [1352847600000,32.23],
            [1352934000000,32.64],
            [1353020400000,32.65],
            [1353279600000,32.92],
            [1353366000000,32.64],
            [1353452400000,32.84],
            [1353625200000,33.40],
            [1353884400000,33.30],
            [1353970800000,33.18],
            [1354057200000,33.88],
            [1354143600000,34.09],
            [1354230000000,34.61],
            [1354489200000,34.70],
            [1354575600000,35.30],
            [1354662000000,35.40],
            [1354748400000,35.14],
            [1354834800000,35.48],
            [1355094000000,35.75],
            [1355180400000,35.54],
            [1355266800000,35.96],
            [1355353200000,35.53],
            [1355439600000,37.56],
            [1355698800000,37.42],
            [1355785200000,37.49],
            [1355871600000,38.09],
            [1355958000000,37.87],
            [1356044400000,37.71],
            [1356303600000,37.53],
            [1356476400000,37.55],
            [1356562800000,37.30],
            [1356649200000,36.90],
            [1356908400000,37.68],
            [1357081200000,38.34],
            [1357167600000,37.75],
            [1357254000000,38.13],
            [1357513200000,37.94],
            [1357599600000,38.14],
            [1357686000000,38.66],
            [1357772400000,38.62],
            [1357858800000,38.09],
            [1358118000000,38.16],
            [1358204400000,38.15],
            [1358290800000,37.88],
            [1358377200000,37.73],
            [1358463600000,37.98],
            [1358809200000,37.95],
            [1358895600000,38.25],
            [1358982000000,38.10],
            [1359068400000,38.32],
            [1359327600000,38.24],
            [1359414000000,38.52],
            [1359500400000,37.94],
            [1359586800000,37.83],
            [1359673200000,38.34],
            [1359932400000,38.10],
            [1360018800000,38.51],
            [1360105200000,38.40],
            [1360191600000,38.07],
            [1360278000000,39.12],
            [1360537200000,38.64],
            [1360623600000,38.89],
            [1360710000000,38.81],
            [1360796400000,38.61],
            [1360882800000,38.63],
            [1361228400000,38.99],
            [1361314800000,38.77],
            [1361401200000,38.34],
            [1361487600000,38.55],
            [1361746800000,38.11],
            [1361833200000,38.59],
            [1361919600000,39.60],
            ]
            
        },

        ],
        markers: {
        size: 0,
        style: 'hollow',
        },
        xaxis: {
        type: 'datetime',
        min: new Date('01 Mar 2012').getTime(),
        tickAmount: 6,
        axisBorder: {
            show: true,
            color: '#bec7e0',
          },  
          axisTicks: {
            show: true,
            color: '#bec7e0',
          },    
        },
        colors: ['#dfa579'],
        tooltip: {
        x: {
            format: 'dd MMM yyyy'
        }
        },
        fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.4,
            stops: [0, 100]
        }
        },

    }

    var chart = new ApexCharts(
        document.querySelector("#apex_area2"),
        options
    );

    chart.render();

    var resetCssClasses = function (activeEl) {
        var els = document.querySelectorAll("button");
        Array.prototype.forEach.call(els, function (el) {
        el.classList.remove('active');
        });

        activeEl.target.classList.add('active')
    }

    document.querySelector("#one_month").addEventListener('click', function (e) {
        resetCssClasses(e)
        chart.updateOptions({
        xaxis: {
            min: new Date('28 Jan 2013').getTime(),
            max: new Date('27 Feb 2013').getTime(),
        }
        })
    })

    document.querySelector("#six_months").addEventListener('click', function (e) {
        resetCssClasses(e)
        chart.updateOptions({
        xaxis: {
            min: new Date('27 Sep 2012').getTime(),
            max: new Date('27 Feb 2013').getTime(),
        }
        })
    })

    document.querySelector("#one_year").addEventListener('click', function (e) {
        resetCssClasses(e)
        chart.updateOptions({
        xaxis: {
            min: new Date('27 Feb 2012').getTime(),
            max: new Date('27 Feb 2013').getTime(),
        }
        })
    })

    document.querySelector("#ytd").addEventListener('click', function (e) {
        resetCssClasses(e)
        chart.updateOptions({
        xaxis: {
            min: new Date('01 Jan 2013').getTime(),
            max: new Date('27 Feb 2013').getTime(),
        }
        })
    })

    document.querySelector("#all").addEventListener('click', function (e) {
        resetCssClasses(e)
        chart.updateOptions({
        xaxis: {
            min: undefined,
            max: undefined,
        }
        })
    })

    document.querySelector("#ytd").addEventListener('click', function () {

    })
  })
  
  //  Column Charts

  //colunm-1
  
var options = {
    chart: {
        height: 396,
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
            columnWidth: '55%',
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
    colors: ["#5766da", "#1ecab8", "#fbb624"],
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
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
            text: '$ (thousands)'
        }
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
            opacity: 0.2
        },
        borderColor: '#f1f3fa'
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
}

var chart = new ApexCharts(
    document.querySelector("#apex_column1"),
    options
);

chart.render();

//apex-column-2


var options = {
    chart: {
        height: 380,
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
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "%";
        },
        offsetY: -20,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },
    colors: ["#4facfe"],
    series: [{
        name: 'Inflation',
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
    }],
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        labels: {
            offsetY: -18,

        },
        axisBorder: {
            show: true,
            color: '#28365f',
        },
        axisTicks: {
            show: true,
            color: '#28365f',
        },
        crosshairs: {
            fill: {
                type: 'gradient',
                gradient: {
                    colorFrom: '#D8E3F0',
                    colorTo: '#BED1E6',
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                }
            }
        },
        tooltip: {
            enabled: true,
            offsetY: -35,

        }
    },
    fill: {
        gradient: {
            enabled: false,
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [50, 0, 100, 100]
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            formatter: function (val) {
                return val + "%";
            }
        }

    },
    title: {
        text: 'Monthly Inflation in Argentina, 2002',
        floating: true,
        offsetY: 350,
        align: 'center',
        style: {
            color: '#8997bd'
        }
    },
    grid: {
        row: {
            colors: ['#afb7d21a', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.2
        },
        borderColor: '#f1f3fa'
    }
}

var chart = new ApexCharts(
    document.querySelector("#apex_column2"),
    options
);

chart.render();

//Apex Bar Charts

// apex-bar-1

var options = {
    chart: {
        height: 380,
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
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
    }],
    colors: ["#95a6bf"],
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
        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'],        
    },
    states: {
        hover: {
            filter: 'none'
        }
    },
    grid: {
        borderColor: '#f1f3fa'
    }
}

var chart = new ApexCharts(
    document.querySelector("#apex_bar1"),
    options
);

chart.render();

// apex-bart-2


var options = {
    chart: {
        height: 380,
        type: 'bar',
        stacked: true,
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
    colors: ['#ffab96','#185a9d'],
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: '80%',
            
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 1,
        colors: ["#fff"]
    },
    series: [{
        name: 'Males',
        data: [0.4, 0.65, 0.76, 0.88, 1.5, 2.1, 2.9, 3.8, 3.9, 4.2, 4, 4.3, 4.1, 4.2, 4.5, 3.9, 3.5, 3]
    },
    {
        name: 'Females',
        data: [-0.8, -1.05, -1.06, -1.18, -1.4, -2.2, -2.85, -3.7, -3.96, -4.22, -4.3, -4.4, -4.1, -4, -4.1, -3.4, -3.1, -2.8]
    }],
    grid: {
        xaxis: {
            showLines: false
        }
    },
    yaxis: {
        min: -5,
        max: 5,
        title: {
           // text: 'Age',
        },
        axisBorder: {
            show: true,
            color: '#bec7e0',
          },  
          axisTicks: {
            show: true,
            color: '#bec7e0',
        }, 
    },
    tooltip: {
        shared: false,
        x: {
            formatter: function(val) {
                return val
            }
        },
        y: {
            formatter: function(val) {
                return Math.abs(val) + "%"
            }
        }
    },
    xaxis: {
      categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59', '50-54', '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9', '0-4'],
      
      title: {
          text: 'Percent'
      },
      labels: {
        formatter: function(val) {
          return Math.abs(Math.round(val)) + "%"
        }
      }
    },
    legend: {
        offsetY: 6,
    },
    grid: {
        borderColor: '#f1f3fa'
    }
}

var chart = new ApexCharts(
    document.querySelector("#apex_bar2"),
    options
);

chart.render();

// Mixed All

  //Mixed-1
var options = {
  chart: {
      height: 380,
      type: 'line',
      stacked: false,
      toolbar: {
          show: false
      },
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
  stroke: {
      width: [0, 2, 4],
      curve: 'smooth'
  },
  plotOptions: {
      bar: {
          columnWidth: '50%'
      }
  },
  colors: ["#1ecab8", "#fbb624", "#f93b7a"],
  series: [{
      name: 'Team A',
      type: 'column',
      data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
  }, {
      name: 'Team B',
      type: 'area',
      data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
  }, {
      name: 'Team C',
      type: 'line',
      data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
  }],
  fill: {
      opacity: [0.85, 0.25, 1],
      gradient: {
          inverseColors: false,
          shade: 'light',
          type: "vertical",
          opacityFrom: 0.85,
          opacityTo: 0.55,
          stops: [0, 100, 100, 100]
      }
  },
  labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
  markers: {
      size: 0
  },
  legend: {
      offsetY: 6,
  },
  xaxis: {
      type: 'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      title: {
          text: 'Points',
      },
  },
  tooltip: {
      shared: true,
      intersect: false,
      y: {
          formatter: function (y) {
              if (typeof y !== "undefined") {
                  return y.toFixed(0) + " points";
              }
              return y;

          }
      }
  },
  grid: {
      borderColor: '#f1f3fa'
  }
}

var chart = new ApexCharts(
  document.querySelector("#apex_mixed1"),
  options
);

chart.render();

//Mixed-2


var options = {
  chart: {
      height: 380,
      type: 'line',
      stacked: false,
      toolbar: {
          show: false
      },
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
  dataLabels: {
      enabled: false
  },
  stroke: {
      width: [0, 0, 3]
  },
  series: [{
      name: 'Income',
      type: 'column',
      data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
  }, {
      name: 'Cashflow',
      type: 'column',
      data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
  }, {
      name: 'Revenue',
      type: 'line',
      data: [20, 29, 37, 36, 44, 45, 50, 58]
  }],
  colors: ["#20016c", "#77d0ba", "#fa5c7c"],
  xaxis: {
      categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: [
      {
          axisTicks: {
              show: true,
          },
          axisBorder: {
              show: true,
              color: '#20016c'
          },
          labels: {
              style: {
                  color: '#20016c',
              }
          },
          title: {
              text: "Income (thousand crores)"
          },
      },

      {
          axisTicks: {
              show: true,
          },
          axisBorder: {
              show: true,
              color: '#77d0ba'
          },
          labels: {
              style: {
                  color: '#77d0ba',
              },
              offsetX: 10
          },
          title: {
              text: "Operating Cashflow (thousand crores)",
          },
      },
      {
          opposite: true,
          axisTicks: {
              show: true,
          },
          axisBorder: {
              show: true,
              color: '#fa5c7c'
          },
          labels: {
              style: {
                  color: '#fa5c7c',
              }
          },
          title: {
              text: "Revenue (thousand crores)"
          }
      },

  ],
  tooltip: {
      followCursor: true,
      y: {
          formatter: function (y) {
              if (typeof y !== "undefined") {
                  return y + " thousand crores"
              }
              return y;
          }
      }
  },
  grid: {
      borderColor: '#f1f3fa'
  },
  legend: {
      offsetY: 6,
  },
  responsive: [{
      breakpoint: 600,
      options: {
          yaxis: {
              show: false
          },
          legend: {
              show: false
          }
      }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#apex_mixed2"),
  options
);

chart.render();

// Mixed-3


var options = {
  chart: {
      height: 380,
      type: 'line',
      toolbar: {
          show: false
      },
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
  stroke: {
      curve: 'smooth',
      width: 2
  },
  series: [{
      name: 'Team A',
      type: 'area',
      data: [3,25,5,10,22,12,5,3,27,10,5,22,12,5]
  }, {
      name: 'Team B',
      type: 'line',
      data: [8,33,10,15,30,17,10,8,35,15,10,27,17,10]
  }],
  fill: {
      type: 'solid',
      opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09 ', 'Dec 10', 'Dec 11'],
  markers: {
      size: 0
  },
  legend: {
      offsetY: 6,
  },
  colors: ["#30a6d3", "#f7cda0"],
  xaxis: {
    axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: [
      {
          title: {
              text: 'Series A',
          },
      },
      {
          opposite: true,
          title: {
              text: 'Series B',
          },
      },
  ],
  tooltip: {
      shared: true,
      intersect: false,
      y: {
          formatter: function (y) {
              if (typeof y !== "undefined") {
                  return y.toFixed(0) + " points";
              }
              return y;

          }
      }
  },
  grid: {
      borderColor: '#f1f3fa'
  },
  responsive: [{
      breakpoint: 600,
      options: {
          yaxis: {
              show: false
          },
          legend: {
              show: false
          }
      }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#apex_mixed3"),
  options
);

chart.render();


//Bubble Charts

//apex-bubble1


function generateData(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
      var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
      var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
  
      series.push([x, y, z]);
      baseval += 86400000;
      i++;
    }
    return series;
  }


var options = {
  chart: {
      height: 380,
      type: 'bubble',
      toolbar: {
          show: false
      },
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
  dataLabels: {
      enabled: false
  },
  series: [{
      name: 'Bubble 1',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Bubble 2',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
    name: 'Bubble 3',
    data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
        min: 10,
        max: 60
    })
  },
  ],
  fill: {
      opacity: 0.8,
      gradient: {
          enabled: false
      }
  },
  colors: ["#e1a52e", "#01ae9a", "#bbc46a"],
  xaxis: {
      tickAmount: 12,
      type: 'category',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      max: 70
  },
  grid: {
      borderColor: '#f1f3fa'
  },
  legend: {
      offsetY: 6,
  }
}
var chart = new ApexCharts(document.querySelector("#apex_bubble1"), options);

chart.render();


//apex-bubble2

/*
// this function will generate output in this format
// data = [
  [timestamp, 23],
  [timestamp, 33],
  [timestamp, 12]
  ...
]
*/
function generateData1(baseval1, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
      //var x =Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
      var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

      series.push([baseval1, y, z]);
      baseval1 += 86400000;
      i++;
  }
  return series;
}


var options2 = {
  chart: {
      height: 380,
      type: 'bubble',
      toolbar: {
          show: false
      },
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
  dataLabels: {
      enabled: false
  },
  series: [{
      name: 'Product 1',
      data: generateData1(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Product 2',
      data: generateData1(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Product 3',
      data: generateData1(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Product 4',
      data: generateData1(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  }
  ],
  fill: {
      type: 'gradient',
  },
  colors: ["#727cf5", "#0acf97", "#fa5c7c", "#39afd1"],
  xaxis: {
      tickAmount: 12,
      type: 'datetime',

      labels: {
          rotate: 0,
      },
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      max: 70
  },
  legend: {
      offsetY: 6,
  },
  grid: {
      borderColor: '#f1f3fa'
  }
}

var chart = new ApexCharts(
  document.querySelector("#apex_bubble2"),
  options2
);

chart.render();

//Scatter Chart

//apex-scatter1


var options = {
  chart: {
      height: 380,
      type: 'scatter',
      zoom: {
          enabled: false
      },
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

  series: [{
      name: "Sample A",
      data: [
          [16.4, 5.4], [21.7, 2], [25.4, 3], [19, 2], [10.9, 1], [13.6, 3.2], [10.9, 7.4], [10.9, 0], [10.9, 8.2], [16.4, 0], [16.4, 1.8], [13.6, 0.3], [13.6, 0], [29.9, 0], [27.1, 2.3], [16.4, 0], [13.6, 3.7], [10.9, 5.2], [16.4, 6.5], [10.9, 0], [24.5, 7.1], [10.9, 0], [8.1, 4.7], [19, 0], [21.7, 1.8], [27.1, 0], [24.5, 0], [27.1, 0], [29.9, 1.5], [27.1, 0.8], [22.1, 2]]
  }, {
      name: "Sample B",
      data: [
          [6.4, 13.4], [1.7, 11], [5.4, 8], [9, 17], [1.9, 4], [3.6, 12.2], [1.9, 14.4], [1.9, 9], [1.9, 13.2], [1.4, 7], [6.4, 8.8], [3.6, 4.3], [1.6, 10], [9.9, 2], [7.1, 15], [1.4, 0], [3.6, 13.7], [1.9, 15.2], [6.4, 16.5], [0.9, 10], [4.5, 17.1], [10.9, 10], [0.1, 14.7], [9, 10], [12.7, 11.8], [2.1, 10], [2.5, 10], [27.1, 10], [2.9, 11.5], [7.1, 10.8], [2.1, 12]]
  }, {
      name: "Sample C",
      data: [
          [21.7, 3], [23.6, 3.5], [24.6, 3], [29.9, 3], [21.7, 20], [23, 2], [10.9, 3], [28, 4], [27.1, 0.3], [16.4, 4], [13.6, 0], [19, 5], [22.4, 3], [24.5, 3], [32.6, 3], [27.1, 4], [29.6, 6], [31.6, 8], [21.6, 5], [20.9, 4], [22.4, 0], [32.6, 10.3], [29.7, 20.8], [24.5, 0.8], [21.4, 0], [21.7, 6.9], [28.6, 7.7], [15.4, 0], [18.1, 0], [33.4, 0], [16.4, 0]]
  }],
  xaxis: {
      tickAmount: 10,
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      tickAmount: 7
  },
  colors: ["#727cf5", "#0acf97", "#fa5c7c"],
  grid: {
      borderColor: '#f1f3fa'
  },
  legend: {
      offsetY: 6,
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
  document.querySelector("#apex_scatter1"),
  options
);

chart.render();


// apex-scatter2

var options = {
  chart: {
      height: 380,
      type: 'scatter',
      zoom: {
          type: 'xy'
      },
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
  series: [{
      name: 'Team 1',
      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Team 2',
      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Team 3',
      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 30, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Team 4',
      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 10, {
          min: 10,
          max: 60
      })
  },
  {
      name: 'Team 5',
      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 30, {
          min: 10,
          max: 60
      })
  },
  ],
  dataLabels: {
      enabled: false
  },
  colors: ["#39afd1", "#0acf97", "#e3eaef", "#6c757d", "#ffbc00"],
  grid: {
      borderColor: '#f1f3fa',
      xaxis: {
          showLines: true
      },
      yaxis: {
          showLines: true
      },
  },
  legend: {
      offsetY: 6,
  },
  xaxis: {
      type: 'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      max: 70
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
  document.querySelector("#apex_scatter2"),
  options
);

chart.render();

/*
// this function will generate output in this format
// data = [
  [timestamp, 23],
  [timestamp, 33],
  [timestamp, 12]
  ...
]
*/
function generateDayWiseTimeSeries(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

      series.push([baseval, y]);
      baseval += 86400000;
      i++;
  }
  return series;
}



//
// Candlestick chart
//


  //apex-candlestick1

var options = {
  chart: {
      height: 400,
      type: 'candlestick',
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
    candlestick: {
      colors: {
        upward: '#4e7e9b',
        downward: '#e4b1c5'
      }
    }
  },
  series: [{
      data: seriesData
  }],
  	
stroke: {
  show: true,
  colors: '#f1f3fa',
  width: [1,4]    
},
  xaxis: {
      type: 'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  grid: {
    borderColor: '#f1f3fa'
}
}

var chart = new ApexCharts(
  document.querySelector("#apex_candlestick1"),
  options
);

chart.render();

//apex-candlestick-2/3

var optionsCandlestick = {
  chart: {
      height: 240,
      type: 'candlestick',
      toolbar: {
          show: false
      },
      zoom: {
          enabled: false
      },
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
  series: [{
      data: seriesData
  }],
  plotOptions: {
    candlestick: {
      colors: {
        upward: '#99b9c9',
        downward: '#b7a96f'
      }
    }
  },
  xaxis: {
      type: 'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  grid: {
    borderColor: '#f1f3fa'
}
}

var chartCandlestick = new ApexCharts(
  document.querySelector("#apex_candlestick2"),
  optionsCandlestick
);

chartCandlestick.render();

var options = {
  chart: {
      height: 160,
      type: 'bar',
      toolbar: {
          show: false,
          autoSelected: 'selection'
      },
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
      selection: {
          xaxis: {
              min: new Date('20 Jan 2017').getTime(),
              max: new Date('10 Dec 2017').getTime()
          },
          fill: {
              color: '#6c757d',
              opacity: 0.4
          },
          stroke: {
              color: '#6c757d',
          }
      },
      events: {
          selection: function (chart, e) {
              chartCandlestick.updateOptions({
                  xaxis: {
                      min: e.xaxis.min,
                      max: e.xaxis.max
                  }
              }, false, false)
          }
      },

  },
  dataLabels: {
      enabled: false
  },
  plotOptions: {
      bar: {
          columnWidth: '80%',
          colors: {
              ranges: [
                  {
                      from: -1000,
                      to: 0,
                      color: '#ee6c62'
                  }, {
                      from: 1,
                      to: 10000,
                      color: '#08aeb0'
                  }
              ],
             
          },
      }        
  },
  series: [{
      name: 'volume',
      data: seriesDataLinear
  }],
  xaxis: {
      type: 'datetime',
      axisBorder: {
          offsetX: 13
      },
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
    }, 
  },
  yaxis: {
      labels: {
          show: false
      }
  },
  grid: {
    borderColor: '#f1f3fa'
}
}

var chart = new ApexCharts(
  document.querySelector("#apex_candlestick3"),
  options
);

chart.render();

//
// Pie Charts
//

  //apex-pie1

  
var options = {
  chart: {
      height: 320,
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
  labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
  colors: ["#a3cae0", "#232f5b","#f06a6c", "#f1e299", "#08aeb0"],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: 6
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
  document.querySelector("#apex_pie1"),
  options
);

chart.render();

  //apex-pie2

var options = {
  chart: {
      height: 320,
      type: 'donut',
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
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  series: [44, 55, 41, 17, 15],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: 6
  },
  labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
  colors: ["#a3cae0", "#232f5b","#f06a6c", "#f1e299", "#08aeb0"],
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
  }],
  fill: {
      type: 'gradient'
  }
}

var chart = new ApexCharts(
  document.querySelector("#apex_pie2"),
  options
);

chart.render();

  //apex-pie3

  var options = {
    chart: {
        height: 320,
        type: 'donut',
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
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [44, 55, 41, 17, 15],
    colors: ["#a3cae0", "#232f5b","#f06a6c", "#f1e299", "#08aeb0"],
    labels: ["Comedy", "Action", "SciFi", "Drama", "Horror"],
    dataLabels: {
        dropShadow: {
            blur: 3,
            opacity: 0.8
        }
    },
    fill: {
    type: 'pattern',
      opacity: 1,
      pattern: {
        enabled: true,
        style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'], 
      },
    },
    states: {
      hover: {
        enabled: false
      }
    },
    legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: 6
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
    document.querySelector("#apex_pie3"),
    options
);

chart.render();

  //apex-pie4

  var options = {
    chart: {
        height: 320,
        type: 'pie',
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
    labels: ["Series 1", "Series 2", "Series 3", "Series 4"],
    colors: ["#39afd1", "#ffbc00", "#727cf5", "#0acf97"],
    series: [44, 33, 54, 45],
    fill: {
        type: 'image',
        opacity: 0.85,
        image: {
             src: ['../assets/images/small/img-1.jpg', '../assets/images/small/img-2.jpg', '../assets/images/small/img-3.jpg', '../assets/images/small/img-4.jpg'],
            width: 25,
            imagedHeight: 25
        },
    },
    stroke: {
        show: true,
        width: 4,
        colors: ['transparent']
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: 6
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
    document.querySelector("#apex_pie4"),
    options
);

chart.render();

// Apex Radialbar Charts

// Apex-radialbar1


var options = {
  chart: {
      height: 320,
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
          hollow: {
              size: '70%',
          },
          track: {
            background: '#b9c1d4',
            opacity: 0.5,
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
                fontSize: '18px',
            },
            value: {
                fontSize: '16px',
                color: '#8997bd',
            },          
          }
      },
  },
  colors: ["#68823f"],
  series: [70],
  labels: ['CRICKET'],

}

var chart = new ApexCharts(
  document.querySelector("#apex_radialbar1"),
  options
);

chart.render();



//Apex-radialbar2

var options = {
  chart: {
      height: 350,
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
        track: {
            background: '#b9c1d4',
            opacity: 0.5,            
          },
          dataLabels: {
              name: {
                  fontSize: '22px',
              },
              value: {
                  fontSize: '16px',
                  color: '#8997bd',
              },
              total: {
                  show: true,
                  label: 'Total',
                  color: '#8997bd',
                  formatter: function (w) {
                      // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                      return 249
                  }
              }
          }
      }
  },
  series: [44, 55, 67, 83],
  labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
  
}

var chart = new ApexCharts(
  document.querySelector("#apex_radialbar2"),
  options
);

chart.render();



//Apex-radialbar3

var options = {
  chart: {
      height: 380,
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
                  offsetY: 120
              },
              value: {
                  offsetY: 76,
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
      dashArray: 4
  },
  colors: ["#727cf5"],
  series: [67],
  labels: ['Median Ratio'],
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

// window.setInterval(function () {
//     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
// }, 2000)

//Apex-radialbar4

var options = {
  chart: {
    height: 380,
    type: 'radialBar',
    toolbar: {
      show: true
    },
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
      endAngle: 225,
       hollow: {
        margin: 0,
        size: '70%',
        background: 'transparent',
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: 'front',
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24
        }
      },
      track: {
        background: '#b9c1d4',
        opacity: 0.3,
        strokeWidth: '67%',
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35
        }
      },

      dataLabels: {
        showOn: 'always',
        name: {
          offsetY: -6,
          show: true,
          color: '#8997bd',
          fontSize: '17px'
        },
        value: {
          formatter: function(val) {
            return parseInt(val);
          },
          color: '#8997bd',
          fontSize: '36px',
          show: true,
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
  labels: ['Percent'],

}

var chart = new ApexCharts(
  document.querySelector("#apex_radialbar4"),
  options
);

chart.render();


//
// Sparkline
//


Apex.grid = {
  padding: {
      right: 0,
      left: 0
  }
}

Apex.dataLabels = {
  enabled: false
}

var randomizeArray = function (arg) {
  var array = arg.slice();
  var currentIndex = array.length, temporaryValue, randomIndex;

  while (0 !== currentIndex) {

      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;

      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
  }

  return array;
}

// data for the sparklines that appear below header area
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

// the default colorPalette for this dashboard
//var colorPalette = ['#01BFD6', '#5564BE', '#F7A600', '#EDCD24', '#F74F58'];
var colorPalette = ['#00D8B6', '#008FFB', '#FEB019', '#FF4560', '#775DD0']

var spark1 = {
  chart: {
      type: 'area',
      height: 160,
      sparkline: {
          enabled: true
      },
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
  stroke: {
      width: 2,
      curve: 'straight'
  },
  fill: {
      opacity: 0.2,
  },
  series: [{
      name: 'Metrica Sales ',
      data: randomizeArray(sparklineData)
  }],
  yaxis: {
      min: 0
  },
  colors: ['#f93b7a'],
  title: {
      text: '$424,652',
      offsetX: 20,
      style: {
          fontSize: '24px',
          color: '#8997bd',
      }
  },
  subtitle: {
      text: 'Sales',
      offsetX: 20,
      style: {
          fontSize: '14px',
          color: '#8997bd',
      }
  }
}
new ApexCharts(document.querySelector("#spark1"), spark1).render();

var spark2 = {
  chart: {
      type: 'area',
      height: 160,
      sparkline: {
          enabled: true
      },
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
  stroke: {
      width: 2,
      curve: 'straight'
  },
  fill: {
      opacity: 0.2,
  },
  series: [{
      name: 'Metrica Expenses ',
      data: randomizeArray(sparklineData)
  }],
  yaxis: {
      min: 0
  },
  colors: ['#fbb624'],
  title: {
      text: '$235,312',
      offsetX: 20,
      style: {
          fontSize: '24px',
          color: '#8997bd',
      }
  },
  subtitle: {
      text: 'Expenses',
      offsetX: 20,
      style: {
          fontSize: '14px',
          color: '#8997bd',
      }
  }
}

new ApexCharts(document.querySelector("#spark2"), spark2).render();

var spark3 = {
  chart: {
      type: 'area',
      height: 160,
      sparkline: {
          enabled: true
      },
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
  stroke: {
      width: 2,
      curve: 'straight'
  },
  fill: {
      opacity: 0.2,
  },
  series: [{
      name: 'Net Profits ',
      data: randomizeArray(sparklineData)
  }],
  xaxis: {
      crosshairs: {
          width: 1
      },
  },
  yaxis: {
      min: 0
  },
  colors: ['#0acf97'],
  title: {
      text: '$135,965',
      offsetX: 20,
      style: {
          fontSize: '24px',
          color: '#8997bd',
      }
  },
  subtitle: {
      text: 'Profits',
      offsetX: 20,
      style: {
          fontSize: '14px',
          color: '#8997bd',
      }
  }
}

new ApexCharts(document.querySelector("#spark3"), spark3).render();

var options1 = {
  chart: {
      type: 'line',
      width: 140,
      height: 60,
      sparkline: {
          enabled: true
      },
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
  series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
  }],
  stroke: {
      width: 2,
      curve: 'smooth'
  },
  markers: {
      size: 0
  },
  colors: ["#727cf5"],
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options2 = {
  chart: {
      type: 'line',
      width: 140,
      height: 60,
      sparkline: {
          enabled: true
      },
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
  colors: ["#0acf97"],
  series: [{
      data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
  }],
  stroke: {
      width: 2,
      curve: 'smooth'
  },
  markers: {
      size: 0
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options3 = {
  chart: {
      type: 'line',
      width: 140,
      height: 60,
      sparkline: {
          enabled: true
      },
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
  colors: ["#ffbc00"],
  series: [{
      data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
  }],
  stroke: {
      width: 2,
      curve: 'smooth'
  },
  markers: {
      size: 0
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options4 = {
  chart: {
      type: 'line',
      width: 140,
      height: 60,
      sparkline: {
          enabled: true
      },
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
  colors: ["#fa5c7c"],
  series: [{
      data: [15, 75, 47, 65, 14, 2, 41, 54, 4, 27, 15]
  }],
  stroke: {
      width: 2,
      curve: 'smooth'
  },
  markers: {
      size: 0
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options5 = {
  chart: {
      type: 'bar',
      width: 100,
      height: 60,
      sparkline: {
          enabled: true
      },
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
      bar: {
          columnWidth: '80%'
      }
  },
  colors: ["#727cf5"],
  series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
  }],
  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
  xaxis: {
      crosshairs: {
          width: 1
      },
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options6 = {
  chart: {
      type: 'bar',
      width: 100,
      height: 60,
      sparkline: {
          enabled: true
      },
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
      bar: {
          columnWidth: '80%'
      }
  },
  colors: ["#0acf97"],
  series: [{
      data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
  }],
  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
  xaxis: {
      crosshairs: {
          width: 1
      },
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options7 = {
  chart: {
      type: 'bar',
      width: 100,
      height: 60,
      sparkline: {
          enabled: true
      },
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
      bar: {
          columnWidth: '80%'
      }
  },
  colors: ["#ffbc00"],
  series: [{
      data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
  }],
  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
  xaxis: {
      crosshairs: {
          width: 1
      },
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

var options8 = {
  chart: {
      type: 'bar',
      width: 100,
      height: 60,
      sparkline: {
          enabled: true
      },
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
      bar: {
          columnWidth: '80%'
      }
  },
  colors: ["#fa5c7c"],
  series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
  }],
  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
  xaxis: {
      crosshairs: {
          width: 1
      },
  },
  tooltip: {
      fixed: {
          enabled: false
      },
      x: {
          show: false
      },
      y: {
          title: {
              formatter: function (seriesName) {
                  return ''
              }
          }
      },
      marker: {
          show: false
      }
  }
}

new ApexCharts(document.querySelector("#chart1"), options1).render();
new ApexCharts(document.querySelector("#chart2"), options2).render();
new ApexCharts(document.querySelector("#chart3"), options3).render();
new ApexCharts(document.querySelector("#chart4"), options4).render();
new ApexCharts(document.querySelector("#chart5"), options5).render();
new ApexCharts(document.querySelector("#chart6"), options6).render();
new ApexCharts(document.querySelector("#chart7"), options7).render();
new ApexCharts(document.querySelector("#chart8"), options8).render();
