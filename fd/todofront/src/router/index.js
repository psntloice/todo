import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
//import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import Btstrapped from '../views/Btstrapped.vue'



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'landing',
      component: LandingView
    },
        
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },     
    
    {
      path: '/BTS',
      name: 'BTS',
      component: Btstrapped
    }, 
  ]
})

export default router
