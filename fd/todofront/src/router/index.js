import { createRouter, createWebHistory } from 'vue-router'
import TodoHomeView from '../views/TodoHomeView.vue'
//import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import Btstrapped from '../views/Btstrapped.vue'
import LogIn from '../components/LogIn.vue';
import LandingPageView from '../views/LandingPageView.vue';



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'landpage',
      component: LandingPageView
    }, 
      {
      path: '/login',
      name: 'login',
      component: LogIn
    }, 

    {
      path: '/todoh',
      name: 'todoh',
      component: TodoHomeView,
      meta: { requiresAuth: true },
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


// Navigation guard to check authentication before entering a route

router.beforeEach((to, from, next) => {
  const isAuthenticated = true;/* Implement your authentication check here */ false;

  if (to.matched.some((route) => route.meta.requiresAuth) && !isAuthenticated) {
    // Redirect to landing page if authentication is required but user is not authenticated
    
    next('/');
  } else {
    console.log(`Navigating from ${from.path} to ${to.path}`);
    next();
  }
});

export default router
