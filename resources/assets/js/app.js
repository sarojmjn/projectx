// require('./bootstrap');

// window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';

import routes from './routes'


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
