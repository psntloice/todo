import store from '../store/auth'; 
const isAuthenticated = () => store.state.isAuthenticated;

const checkAuthentication = (to, from, next) => {
  if (to.matched.some((route) => route.meta.requiresAuth) && !isAuthenticated()) {
    // Redirect to the landing page if authentication is required but the user is not authenticated
    console.log(isAuthenticated());
    next('/');
  } else {
    // Allow navigation to other routes
    console.log(isAuthenticated());
    next();
  }
};


export default checkAuthentication;