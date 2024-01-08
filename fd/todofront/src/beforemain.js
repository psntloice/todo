import './assets/main.css'

//added
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
  routes: [], // We'll add routes here later
});

new Vue({
  router,
  render: h => h(App), // App component will be defined separately
}).$mount('#app');

/////////

import { createApp } from 'vue'
import App from './App.vue'
//import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')
