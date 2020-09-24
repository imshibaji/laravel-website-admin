/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * tableDragger Js
 */


 
$(function() {   

    /* eslint-disable no-console*/

    tableDragger(document.querySelector('#default-table'));
    tableDragger(document.querySelector('#row-table'), { mode: 'row' });
    tableDragger(document.querySelector('#only-body-table'), { mode: 'row', onlyBody: true });
    tableDragger(document.querySelector('#handle-table'), { dragHandler: '.mdi-cursor-move' });
    tableDragger(document.querySelector('#free-table'), { mode: 'free', dragHandler: '.mdi-cursor-move', onlyBody: true });
    tableDragger(document.querySelector('#event-table'), { mode: 'free', dragHandler: '.mdi-cursor-move', onlyBody: true })
    .on('drag', function() {
    })
    .on('drop', function(from, to, el, mode)  {
    })
    .on('shadowMove', function(from, to, el, mode) {
    })
    .on('out', function(el, mode) {
    });

});


