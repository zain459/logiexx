require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('other-details-component', require('./components/CourseOtherDetailsComponenet.vue').default);
Vue.component('edit-other-details-component', require('./components/CourseOtherDetailsEditController.vue').default);
Vue.component('event-create-component', require('./components/EventCreateComponent.vue').default);
Vue.component('course-unit-create-component', require('./components/CourseUnitCreateComponent.vue').default);
Vue.component('edit-course-unit-component', require('./components/CourseUnitEditComponent.vue').default);
Vue.component('event-edit-component', require('./components/EventEditComponent.vue').default);
Vue.component('news-form', require('./components/NewsForm.vue').default);
Vue.component('news-edit', require('./components/NewsEdit.vue').default);
Vue.component('pages-form', require('./components/PagesForm.vue').default);
Vue.component('pages-edit', require('./components/PagesEdit.vue').default);

const app = new Vue({
    el: '#app',
});
