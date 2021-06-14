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
        path: '/statistika',
        name: 'statistika',
        component: () => import('./views/Statistika.vue')
    },
    {
        path: '/testiranje',
        name: 'testiranje',
        component: () => import('./views/Testiranje.vue')
    },
    {
        path: '/zastita',
        name: 'zastita',
        component: () => import('./views/Zastita.vue')
    },
    {
        path: '/simptomi',
        name: 'simptomi',
        component: () => import('./views/Simptomi.vue')
    },
    {
        path: '/vakcine',
        name: 'vakcine',
        component: () => import('./views/Vakcine.vue')
    }
];

const router = new Router({
    routes: routes, 
    linkActiveClass: 'active'
});

export default router;