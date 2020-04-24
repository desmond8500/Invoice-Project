require('./bootstrap');
require('./adminlte/adminlte');


window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// import { library } from '@fortawesome/fontawesome-svg-core';
// import { faUserSecret } from '@fortawesome/free-solid-svg-icons';
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';


// Pages ==============================================================================
import Index    from './components/pages/index.vue';
import Devis    from './components/pages/devis/devis.vue';
import Projets  from './components/pages/projets/projets.vue';
import Clients  from './components/pages/clients/clients.vue';

const routes = [
    { path: '/',        component: Index },
    { path: '/index',   component: Index },
    { path: '/devis',   component: Devis },
    { path: '/projets', component: Projets},
    { path: '/clients', component: Clients },
];

// Composants ==========================================================================
// Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('navbar', require('./components/index/navbar.vue').default);
Vue.component('adminlte-nav', require('./components/index/nav.vue').default);
Vue.component('adminlte-user', require('./components/index/user.vue').default);
Vue.component('adminlte-sidebarmenu', require('./components/index/sidebarmenu.vue').default);
Vue.component('adminlte-sidebar', require('./components/index/sidebar.vue').default);
Vue.component('adminlte-footer', require('./components/index/footer.vue').default);

const router = new VueRouter({ routes });

const app = new Vue({
    el: '#app',
    router: router
});
