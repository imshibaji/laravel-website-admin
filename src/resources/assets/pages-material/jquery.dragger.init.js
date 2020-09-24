/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Tabledit Js
 */


 
$(function() {   

    /* eslint-disable no-console*/

    tableDragger(document.querySelector('#default-table'));
    tableDragger(document.querySelector('#row-table'), { mode: 'row' });
    tableDragger(document.querySelector('#only-body-table'), { mode: 'row', onlyBody: true });
    tableDragger(document.querySelector('#handle-table'), { dragHandler: '.mdi-cursor-move' });
    tableDragger(document.querySelector('#free-table'), { mode: 'free', dragHandler: '.mdi-cursor-move', onlyBody: true });
    tableDragger(document.querySelector('#event-table'), { mode: 'free', dragHandler: '.mdi-cursor-move', onlyBody: true })
    .on('drag', () => {
        console.log('drag');
    })
    .on('drop', (from, to, el, mode) => {
        console.log(`drop ${el.nodeName} from ${from} ${mode} to ${to} ${mode}`);
    })
    .on('shadowMove', (from, to, el, mode) => {
        console.log(`move ${el.nodeName} from ${from} ${mode} to ${to} ${mode}`);
    })
    .on('out', (el, mode) => {
        console.log(`move out or drop ${el.nodeName} in mode ${mode}`);
    });

});


