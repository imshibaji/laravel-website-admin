/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Jvectormap Js
 */

 
!function($) {
  "use strict";

  var VectorMap = function() {};

  VectorMap.prototype.init = function() {
      //various examples
      $('#world-map-markers').vectorMap({
    map : 'world_mill_en',
    scaleColors : ['#4d79f6', '#4d79f6'],
    normalizeFunction : 'polynomial',
    hoverOpacity : 0.7,
    hoverColor : false,
    regionStyle : {
      initial : {
        fill : '#3f7dff'
      }
    },
     markerStyle: {
              initial: {
                  r: 9,
                  'fill': '#4d79f6',
                  'fill-opacity': 0.9,
                  'stroke': '#fff',
                  'stroke-width' : 7,
                  'stroke-opacity': 0.4
              },

              hover: {
                  'stroke': '#fff',
                  'fill-opacity': 1,
                  'stroke-width': 1.5
              }
          },
    backgroundColor : 'transparent',
    markers : [ {
      latLng : [-8.51, 179.21],
      name : 'Tuvalu'
    }, {
      latLng : [3.2, 73.22],
      name : 'Maldives'
    }, {
      latLng : [35.88, 14.5],
      name : 'Malta'
    }, {
      latLng : [12.05, -61.75],
      name : 'Grenada'
    }, {
      latLng : [7.35, 134.46],
      name : 'Palau'
    }, {
      latLng : [42.5, 1.51],
      name : 'Andorra'
    },{
      latLng : [26.02, 50.55],
      name : 'Bahrain'
    },]
  });

      $('#usa').vectorMap({map: 'us_aea_en',backgroundColor: 'transparent',
                regionStyle: {
                  initial: {
                    fill: '#e0504f'
                  }
        }});
  $('#canada').vectorMap({map : 'ca_lcc',backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#ffd862'
          }
        }});
      $('#uk').vectorMap({map: 'uk_mill_en',backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: '#75439a'
          }
        }});
      $('#chicago').vectorMap({map: 'us-il-chicago_mill_en',backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: '#24bce3'
          }
        }});

},


  //init
  $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
}(window.jQuery),

//initializing 
function($) {
  "use strict";
  $.VectorMap.init()
}(window.jQuery);
