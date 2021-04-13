import router from './router';
import {store} from './store';
import MainApp from './pages/MainApp';
import Vue from 'vue';

// require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('header-component', require('./components/header/header.component.vue').default);
Vue.component('mini-cart', require('./components/mini-cart/mini-cart.component.vue').default);
Vue.component('item-preview', require('./components/item-preview/item-preview.component.vue').default);
Vue.component('main-app', require('./pages/MainApp.vue').default);

const app = new Vue({
    router,
    store,
    render: h => h(MainApp)
}).$mount('#app');
