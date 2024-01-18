import { createRouter, createWebHistory } from 'vue-router'
import TodoHomeView from '../views/TodoHomeView.vue'
import LogIn from '../components/LogIn.vue';
import LandingPageView from '../views/LandingPageView.vue';
import checkAuthentication from './checkAuthentication.js'; 


const router = createRouter({
  // history: createWebHistory(import.meta.env.BASE_URL),
  history: createWebHistory(),

  routes: [
    {
      path: '/',
      name: 'landpage',
      component: LandingPageView,
      meta: { requiresAuth: false },
    }, 
      {
      path: '/login',
      name: 'login',
      component: LogIn,
      meta: { requiresAuth: false },
    }, 

    {
      path: '/todoh',
      name: 'todoh',
      component: TodoHomeView,
      meta: { requiresAuth: true },
    },     
    
  ]
})

// Navigation guard to check authentication before entering a route

router.beforeEach(checkAuthentication);

export default router
