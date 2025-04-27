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

Alpine.start();
