const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js([
    __dirname + '/src/resources/public/assets/js/jquery.min.js',
    __dirname + '/src/resources/public/assets/js/jquery-ui.min.js',
    __dirname + '/src/resources/public/assets/js/bootstrap.bundle.min.js',
    __dirname + '/src/resources/public/assets/js/metismenu.min.js',
    __dirname + '/src/resources/public/assets//js/waves.js',
    __dirname + '/src/resources/public/assets/js/feather.min.js',
    __dirname + '/src/resources/public/assets/js/jquery.slimscroll.min.js',
    __dirname + '/src/resources/public/assets/js/js.cookie.min.js',
    __dirname + '/src/resources/public/assets/js/js.osColorMode.js',
    __dirname + '/src/resources/public/assets/js/formio.full.min.js',
    __dirname + '/src/resources/public/assets/plugins/apexcharts/apexcharts.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/jquery.dataTables.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/dataTables.bootstrap4.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/dataTables.buttons.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/buttons.bootstrap4.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/jszip.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/pdfmake.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/vfs_fonts.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/buttons.html5.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/buttons.print.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/buttons.colVis.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/dataTables.responsive.min.js',
    // __dirname + '/src/resources/public/assets/plugins/datatables/responsive.bootstrap4.min.js',
    __dirname + '/src/resources/public/assets/plugins/tinymce/tinymce.min.js',
    __dirname + '/src/resources/public/assets/js/app.js',
    __dirname + '/src/resources/public/assets/js/my-app.js',
], 'js/admin.js');
    // .sass( __dirname + '/src/resources/assets/sass/app.scss', 'css/post.css');

if (mix.inProduction()) {
    mix.version();
}
