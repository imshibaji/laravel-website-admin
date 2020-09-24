/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Flot Js
 */

 


$(function() {

  var d1 = [];
  for (var i = 0; i <= 10; i += 1) {
    d1.push([i, parseInt(Math.random() * 30)]);
  }

  var d2 = [];
  for (var i = 0; i <= 10; i += 1) {
    d2.push([i, parseInt(Math.random() * 30)]);
  }

  var stack = 0,
    lines = true;

  function plotWithOptions() {
    $.plot("#website-stats", [ d1, d2 ], {
      series: {
        stack: stack,
        lines: {
          show: lines,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0.2
            }, {
              opacity: 0.2
            }]
          }
        }, 
      },
      
      colors: ['#1ecab8', '#2c77f4'],
      grid: {
        hoverable: false,
        clickable: false,
        borderWidth: 0,
        labelMargin: 0,
        color: 'rgba(118, 126, 154, 0.6)',
      },
      xaxis: {
        axisLabelUseCanvas: true,
        borderColor: 'rgba(118, 126, 154, 0.6)',
        axisLabelPadding: 10,
    },
     
    yaxis: {
        color: 'rgba(118, 126, 154, 0.6)',
        axisLabelUseCanvas: true,
        borderColor: 'rgba(118, 126, 154, 0.6)',
        axisLabelPadding: 3,
        autoScale:"exact",
       
      }
    });
  }

  plotWithOptions();


  // We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#flotRealTime", [ getRandomData() ], {
			series: {
                shadowSize: 0	// Drawing is faster without shadows
      },
      colors: ['#1ecab8'],
      grid: {
        hoverable: false,
        clickable: false,
        borderWidth: 0,
        labelMargin: 0,
        color: 'rgba(118, 126, 154, 0.6)',
      },
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

    update();
    

});


$(function() {

  // Example Data

  //var data = [
  //	{ label: "Series1",  data: 10},
  //	{ label: "Series2",  data: 30},
  //	{ label: "Series3",  data: 90},
  //	{ label: "Series4",  data: 70},
  //	{ label: "Series5",  data: 80},
  //	{ label: "Series6",  data: 110}
  //];

  //var data = [
  //	{ label: "Series1",  data: [[1,10]]},
  //	{ label: "Series2",  data: [[1,30]]},
  //	{ label: "Series3",  data: [[1,90]]},
  //	{ label: "Series4",  data: [[1,70]]},
  //	{ label: "Series5",  data: [[1,80]]},
  //	{ label: "Series6",  data: [[1,0]]}
  //];

  //var data = [
  //	{ label: "Series A",  data: 0.2063},
  //	{ label: "Series B",  data: 38888}
  //];

  // Randomly Generated Data

  var data = [],
    series = Math.floor(Math.random() * 6) + 3;

  for (var i = 0; i < series; i++) {
    data[i] = {
      label: "Series" + (i + 1),
      data: Math.floor(Math.random() * 100) + 1
    }
  }

  var placeholder = $("#placeholder");

  $("#example-1").click(function() {

    placeholder.unbind();

    $("#title").text("Default pie chart");
    $("#description").text("The default pie chart with no options set.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true
        }
      }
    });
  });

  $("#example-2").click(function() {

    placeholder.unbind();

    $("#title").text("Default without legend");
    $("#description").text("The default pie chart when the legend is disabled. Since the labels would normally be outside the container, the chart is resized to fit.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-3").click(function() {

    placeholder.unbind();

    $("#title").text("Custom Label Formatter");
    $("#description").text("Added a semi-transparent background to the labels and a custom labelFormatter function.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 1,
            formatter: labelFormatter,
            background: {
              opacity: 0.8
            }
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-4").click(function() {

    placeholder.unbind();

    $("#title").text("Label Radius");
    $("#description").text("Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 3/4,
            formatter: labelFormatter,
            background: {
              opacity: 0.5
            }
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-5").click(function() {

    placeholder.unbind();

    $("#title").text("Label Styles #1");
    $("#description").text("Semi-transparent, black-colored label background.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 3/4,
            formatter: labelFormatter,
            background: {
              opacity: 0.5,
              color: "#000"
            }
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-6").click(function() {

    placeholder.unbind();

    $("#title").text("Label Styles #2");
    $("#description").text("Semi-transparent, black-colored label background placed at pie edge.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 3/4,
          label: {
            show: true,
            radius: 3/4,
            formatter: labelFormatter,
            background: {
              opacity: 0.5,
              color: "#000"
            }
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-7").click(function() {

    placeholder.unbind();

    $("#title").text("Hidden Labels");
    $("#description").text("Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 2/3,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-8").click(function() {

    placeholder.unbind();

    $("#title").text("Combined Slice");
    $("#description").text("Multiple slices less than a given percentage (5% in this case) of the pie can be combined into a single, larger slice.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          combine: {
            color: "#999",
            threshold: 0.05
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-9").click(function() {

    placeholder.unbind();

    $("#title").text("Rectangular Pie");
    $("#description").text("The radius can also be set to a specific size (even larger than the container itself).");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 500,
          label: {
            show: true,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-10").click(function() {

    placeholder.unbind();

    $("#title").text("Tilted Pie");
    $("#description").text("The pie can be tilted at an angle.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          radius: 1,
          tilt: 0.5,
          label: {
            show: true,
            radius: 1,
            formatter: labelFormatter,
            background: {
              opacity: 0.8
            }
          },
          combine: {
            color: "#999",
            threshold: 0.1
          }
        }
      },
      legend: {
        show: false
      }
    });
  });

  $("#example-11").click(function() {

    placeholder.unbind();

    $("#title").text("Donut Hole");
    $("#description").text("A donut hole can be added.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          innerRadius: 0.5,
          show: true
        }
      }
    });
  });

  $("#example-12").click(function() {

    placeholder.unbind();

    $("#title").text("Interactivity");
    $("#description").text("The pie can be made interactive with hover and click events.");

    $.plot(placeholder, data, {
      series: {
        pie: {
          show: true
        }
      },
      grid: {
        hoverable: true,
        clickable: true
      }
    });

    placeholder.bind("plothover", function(event, pos, obj) {

      if (!obj) {
        return;
      }

      var percent = parseFloat(obj.series.percent).toFixed(2);
      $("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
    });

    placeholder.bind("plotclick", function(event, pos, obj) {

      if (!obj) {
        return;
      }

      percent = parseFloat(obj.series.percent).toFixed(2);
      alert(""  + obj.series.label + ": " + percent + "%");
    });
  });

  // Show the initial default chart

  $("#example-1").click();

  // Add the Flot version string to the footer

  $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});

// A custom label formatter used by several of the plots

function labelFormatter(label, series) {
  return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}

//

function setCode(lines) {
  $("#code").text(lines.join("\n"));
}