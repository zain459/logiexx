require('./bootstrap');

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('other-details-component', require('./components/CourseOtherDetailsComponenet.vue').default);
Vue.component('edit-other-details-component', require('./components/CourseOtherDetailsEditController.vue').default);
Vue.component('event-create-component', require('./components/EventCreateComponent.vue').default);
Vue.component('event-edit-component', require('./components/EventEditComponent.vue').default);
Vue.component('news-form', require('./components/NewsForm.vue').default);
Vue.component('news-edit', require('./components/NewsEdit.vue').default);



const app = new Vue({
    el: '#app',
});
