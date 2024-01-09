import { createApp } from 'vue'
//import VueRouter from 'vue-router'
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue'
import HomePage from './HomePage.vue';
import PhotoPage from './PhotoPage.vue';
import landingPage from './landingPage.vue';
import Hero2 from './Hero2.vue';
import Hero from './Hero.vue';

//Vue.use(VueRouter)

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', name: 'home', component: HomePage },
        { path: '/photos/:photoId', name: 'photo-details', component: PhotoPage },
        { path: '/landing', name: 'landing', component: landingPage },
        { path: '/hero2', name: 'hero2', component: Hero2 },
        { path: '/hero', name: 'hero', component: Hero },
      ],  });
  


const app = createApp(App)

app.use(router)

app.mount('#app')