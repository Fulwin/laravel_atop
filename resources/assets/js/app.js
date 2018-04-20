/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/* show file value after file select */
// $('.custom-file-input').on('change', function () {
//     $(this).next('.form-control-file').addClass("selected").html($(this).val());
// })

/* method 2 - change file input to text input after selection*/
// $('.custom-file-input').on('change',function(){
//     var fileName = $(this).val();
//     $(this).next('.form-control-file').hide();
//     $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
// })

// handle custom file inputs




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});