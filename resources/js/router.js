import Vue from 'vue';
import Router from 'vue-router';
import Welcome from './views/Welcome.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/mjere',
        name: 'mjere',
        component: () => import('./views/Mjere.vue')
    },
    {
        path: '/testiranje',
        name: 'testiranje',
        component: () => import('./views/Testiranje.vue')
    }

];

const router = new Router({
    routes: routes
});

export default router;