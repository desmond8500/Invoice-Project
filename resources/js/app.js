require('./bootstrap');
require('./adminlte/adminlte');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Pages
import Index    from './components/adminlte3/pages/index.vue';
import Devis    from './components/adminlte3/pages/devis/devis.vue';
import Projets  from './components/adminlte3/pages/projets/projets.vue';
import Clients  from './components/adminlte3/pages/clients/clients.vue';
import Utilisateurs  from './components/adminlte3/pages/users/users.vue';
import Contacts  from './components/adminlte3/pages/contacts/contacts.vue';

const routes = [
    { path: '/',        component: Index },
    { path: '/index',   component: Index },
    { path: '/devis',   component: Devis },
    { path: '/projets', component: Projets },
    { path: '/utilisateurs', component: Utilisateurs },
    { path: '/contacts', component: Contacts },
    { path: '/clients', component: Clients }
];

Vue.component('navbar',                     require('./components/adminlte3/index/navbar.vue').default);
Vue.component('adminlte-nav',               require('./components/adminlte3/index/nav.vue').default);
Vue.component('adminlte-nav-message',       require('./components/adminlte3/index/nav-message.vue').default);
Vue.component('adminlte-nav-notification',  require('./components/adminlte3/index/nav-notification.vue').default);
Vue.component('adminlte-user',              require('./components/adminlte3/index/user.vue').default);
Vue.component('adminlte-sidebarmenu',       require('./components/adminlte3/index/sidebarmenu.vue').default);
Vue.component('adminlte-sidebar',           require('./components/adminlte3/index/sidebar.vue').default);
Vue.component('adminlte-footer',            require('./components/adminlte3/index/footer.vue').default);

const router = new VueRouter({ routes });

const app = new Vue({
    el: '#app',
    router: router
});
