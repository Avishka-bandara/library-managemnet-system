import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import 'material-dashboard/assets/js/material-dashboard.js';

import { createPopper } from '@popperjs/core';
window.createPopper = createPopper;

import PerfectScrollbar from 'perfect-scrollbar';
window.PerfectScrollbar = PerfectScrollbar;

import SmoothScrollbar from 'smooth-scrollbar';
window.SmoothScrollbar = SmoothScrollbar;

import Alpine from 'alpinejs';

window.Alpine = Alpine;


import toastr from 'toastr';

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",  
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",  
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};


Alpine.start();
