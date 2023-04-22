import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap'

$(() => {
    setTimeout(() => {
        alert('jQuery triggered via app.js')
    }, 2500);
});