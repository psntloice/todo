import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import LandingView2 from '../views/LandingView2.vue'
//import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'


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
      path: '/l2',
      name: 'l2',
      component: LandingView2
    },
    
    
  ]
})

export default router
