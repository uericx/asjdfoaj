
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import axios from 'axios';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({   
    el: '#app',
    data: {
        order:[],
        form: {
            worker:'',
            worker2:'',
            cantidad:'',
            order_id: ''
        },
    },
    mounted: function() {
      this.$nextTick(() => {
          this.fetchData();
      });
      // console.log("")
    },
    methods: {
        onReset (evt) {
            evt.preventDefault(); 

            this.form.worker_id = '';
            this.form.worker2_id = '';
            this.form.cantidad = '';
        }, 
        fetchData: function() {
            axios.get('/order')
            .then(response => {
              this.order = response.data;
              console.log(this.order);
            })
            .catch(e => {
              this.errors.push(e)
            });
        },
        addWork (evt){
        	evt.preventDefault();
        	this.form.order_id = this.order.id;

            console.log(this.form);
            axios.post('/work',this.form)
            .then(response => {
            	console.log(response.data);
                this.order = response.data;
                this.form.cantidad = '';
            })
            .catch(e => {
                this.errors.push(e)
            });
        }
    }

});