require('./bootstrap');

window.Vue = require('vue');

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
Vue.component('product-card', require('./components/products/Product_card.vue').default);
Vue.component('product-item', require('./components/products/Product_item.vue').default);
Vue.component('product-detail', require('./components/products/ProductDetail.vue').default);
const app = new Vue({
    el: '#app',
});
