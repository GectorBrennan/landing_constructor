import config from './config';

window.Vue = require('vue');
window.api = require('axios');
//
window.api.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;

require('./functions');