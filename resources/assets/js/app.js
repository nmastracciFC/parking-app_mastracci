import router from './routes';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home', require('./components/Home.vue'));
Vue.component('ticket', require('./components/Ticket.vue'));
Vue.component('garages', require('./components/Garages.vue'));
Vue.component('thank-you', require('./components/ThankYou.vue'));



const app = new Vue({
    el: '#app',
    router:router
});
