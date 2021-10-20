/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vuex from 'vuex'
import storeConfig from './store'

Vue.use(Vuex)

const store = new Vuex.Store(storeConfig)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('specifications-component', require('./components/SpecificationsComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);
Vue.component('create-article-component', require('./components/createArticleComponent.vue').default);
Vue.component('image-component', require('./components/imageUploader.vue').default);
Vue.component('edit-article-component', require('./components/EditArticleComponent.vue').default);
Vue.component('restore-button-component', require('./components/restoreButtonComponent.vue').default);







/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
});