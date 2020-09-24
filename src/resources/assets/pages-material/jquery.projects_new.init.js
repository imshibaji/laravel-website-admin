/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Project Dashboard Js
 */

var picker = new Lightpick({
  field: document.getElementById('pro-start-date'),
  secondField: document.getElementById('pro-end-date'),
  singleDate: false,
  onSelect: function(start, end){
      var str = '';
      str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
      str += end ? end.format('Do MMMM YYYY') : '...';
      document.getElementById('result-3').innerHTML = str;
  }
});