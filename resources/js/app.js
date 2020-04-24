require('./bootstrap');
require('./adminlte/adminlte');


window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import { library } from '@fortawesome/fontawesome-svg-core';
import { faUserSecret } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faUserSecret)

import Index from './components/pages/index.vue';

const routes = [
    { path: '/', component: Index },
    { path: '/index', component: Index }
];

// Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('navbar', require('./components/index/navbar.vue').default);

const router = new VueRouter({ routes });

const app = new Vue({
    el: '#app',
    router: router
});
