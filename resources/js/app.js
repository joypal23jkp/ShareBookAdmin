
require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');

import VueRouter from 'vue-router'
import routes from './router/router'
Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

import App from './App.vue'

Vue.component('header-component', require('./components/Head.vue').default);
Vue.component('footer-component', require('./components/Foot.vue').default);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
    created(){
        Echo.channel('test-channel')
            .listen('NewMessageNotification', (e) => {
                console.log(e);
            });
    }
});

