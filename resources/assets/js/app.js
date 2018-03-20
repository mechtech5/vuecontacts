require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let navbar = require('./components/Navbar.vue');
let vuefooter = require('./components/Footer.vue');

let home = require('./components/Home.vue');
let about = require('./components/About.vue');

const routes = [
  { path: '/home', component: home },
  { path: '/about', component: about }
]

const router = new VueRouter({
	// mode: 'history',
  routes // short for `routes: routes`
});

const app = new Vue({
    el: '#app',
    router,
    components:{navbar, vuefooter}
});
