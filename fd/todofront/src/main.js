import Vue from 'vue';
import App from './App.vue';
import router from './router'; // Import the router instance

Vue.config.productionTip = false;

new Vue({
  router, // Provide the router instance
  render: h => h(App)
}).$mount('#app');
