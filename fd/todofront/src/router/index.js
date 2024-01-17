import { createRouter, createWebHistory } from 'vue-router'
import TodoHomeView from '../views/TodoHomeView.vue'
import LogIn from '../components/LogIn.vue';
import LandingPageView from '../views/LandingPageView.vue';
import store from '../store';


// const routes = [
//   {
//     path: '/',
//     name: 'LoginPage',
//     component: LoginPage,
//   },
// ];




const router = createRouter({
  // history: createWebHistory(import.meta.env.BASE_URL),
  history: createWebHistory(),

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
    
  ]
})


// Navigation guard to check authentication before entering a route

// router.beforeEach((to, from, next) => {
//   const isAuthenticated = false;/* Implement your authentication check here */ false;

//   if (to.matched.some((route) => route.meta.requiresAuth) && !isAuthenticated) {
//     // Redirect to landing page if authentication is required but user is not authenticated
    
//     next('/');
//   } else if (!to.matched.some((route) => route.meta.requiresAuth) && isAuthenticated) {
//     // Redirect to home page if the route does not require authentication and user is authenticated
//     next('/todoh');
//   } else {
//     next();
//   }
// });

// router.beforeEach((to, from, next) => {
//   const requiresAuth = to.matched.some((route) => route.meta.requiresAuth);
//   const isAuthenticated = store.state.auth.isAuthenticated;

//   if (requiresAuth && !isAuthenticated) {
//     // Redirect to landing page if authentication is required but user is not authenticated
//     next('/');
//   } else if (!requiresAuth && isAuthenticated) {
//     // Redirect to home page if the route does not require authentication and user is authenticated
//     next('/todoh');
//   } else {
//     next();
//   }
// });

export default router
