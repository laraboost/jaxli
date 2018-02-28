
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VModal from 'vue-js-modal'

Vue.use(VModal, { dialog: true })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('requests-index', require('./components/requests/index.vue'));
Vue.component('sidebar', require('./components/sidebar/main.vue'));

const app = new Vue({
    el: '#app'
});
