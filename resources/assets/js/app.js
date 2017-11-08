
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

Vue.component('example', require('./components/Example.vue'));
Vue.component('solid-box', require('./components/lte/SolidBox.vue'));
Vue.component('simple-box', require('./components/lte/SimpleBox.vue'));
Vue.component('accordion', require('./components/lte/Accordion.vue'));
Vue.component('accordion-item', require('./components/lte/AccordionItem.vue'));
Vue.component('tab', require('./components/lte/TabPane.vue'));
Vue.component('tabs', require('./components/lte/CustomTabs.vue'));
Vue.component('carousel', require('./components/lte/Carousel.vue'));
Vue.component('carousel-item', require('./components/lte/CarouselItem.vue'));
Vue.component('data-table', require('./components/lte/DataTable.vue'));

const app = new Vue({
    el: '#app'
});
