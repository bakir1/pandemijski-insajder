import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap';

import Bootstrap, { BootstrapVue } from 'bootstrap-vue';
Vue.use(BootstrapVue);

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});

