import './bootstrap';
import './darkmode'

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'
import flatpickr from "flatpickr";

window.Alpine = Alpine;

Alpine.start();

Alpine.plugin(persist)

window.flatpickr = flatpickr;
