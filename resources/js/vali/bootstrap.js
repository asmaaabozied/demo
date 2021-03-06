/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    global.moment = require('moment');
    require('bootstrap');

    // The javascript plugin to display page loading on top
    require('pace');

    window.toastr = require('toastr');

    require('bootstrap4-duallistbox');
    require('daterangepicker');
    require('bootstrap-colorpicker');
    require('tempusdominus-bootstrap-4');
    require('bootstrap4-tagsinput/tagsinput');
    require('bootstrap-switch');
    require('summernote');
    require('smartwizard');
    require('select2/dist/js/select2.full');
} catch (e) {}
