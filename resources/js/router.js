import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const homePage = require('./pages/home/home.page.vue').default;

const routes = [
    {
        path: '/',
        component: homePage
    }
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;