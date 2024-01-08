import { createApp } from 'vue'
//import VueRouter from 'vue-router'
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue'
import HomePage from './HomePage.vue';
import PhotoPage from './PhotoPage.vue';

//Vue.use(VueRouter)

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', name: 'home', component: HomePage },
        { path: '/photos/:photoId', name: 'photo-details', component: PhotoPage },
      ],  });
  


const app = createApp(App)

app.use(router)

app.mount('#app')