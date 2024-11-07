import './bootstrap';
import $ from 'jquery'; // Import jQuery

window.$ = window.jQuery = $; // Assign jQuery to global window object
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
