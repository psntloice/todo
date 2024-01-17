<script setup>
// import store from '../store'; // Import your Vuex store
import auth from '../store/auth'; 

// //import router from './router';
// import { useRouter } from 'vue-router';
// const store = useStore();
//     const router = useRouter();
</script>






<template>

      <form @submit.prevent="login" class="login-form">

         </form>
  </template>

    <!-- <div class="landing-container">
      <LogIn @login-success="handleLoginSuccess" />
    </div>
    <div v-if="authenticated" class="todo-container">
      Your todo app or other components go here -->
      <!-- <h2>Welcome, {{ username }}!</h2>
      Include your Todo component or other components -->
    <!-- </div> -->

    <script>
    export default {
      data() {
        return {
          username: '',
          password: '',
        };
      },
      
      methods: {
    loginn() {
      // Your custom login logic goes here
      console.log('Form submitted');

      this.$store.dispatch('login', {
        username: this.username,
        password: this.password,
      });
      this.$store.dispatch('auth/login', {
        username: this.username,
        password: this.password,
      });

      router.push({ name: 'todoh' });
      store.dispatch(types.LOGIN);
    }
  },
      // methods: {
      //   login() {
      //     // Implement your authentication logic here
      //     console.log('Logging in...', this.username, this.password);
      //     // You can integrate with an authentication service or use a simple logic here

      //      // Call the login action from the store
      // this.$store.dispatch('auth/login');
      //   },
      // },
  //     setup() {
  //   const store = useStore();

  //   const login = () => {
  //     store.dispatch(types.LOGIN);
  //     console.log('Logging in...', this.username, this.password);
  //   };

  //   const logout = () => {
  //     store.dispatch(types.LOGOUT);
  //   };

  //   return {
  //     login,
  //     // logout,
  //   };
  // },
  // setup() {

  //  
  //   const isAuthenticated = () => store.state.auth.isAuthenticated;

  //   // Example: Redirecting to the homepage after successful login
  //   const login = () => {
  //     store.dispatch(types.LOGIN);  // Assuming this action sets isAuthenticated to true
  //     if (isAuthenticated()) {
  //       router.push({ name: 'todoh' });  // Replace 'home' with the actual name of your homepage route
  //     console.log('Logging in...', this.username, this.password)
  //     }
  //   };

  //   // Example: Committing a mutation in the store
  //   const setAuthentication = (value) => store.commit('auth/setAuthentication', value);

  //   return {
  //     isAuthenticated,
  //     login,
  //     setAuthentication,
  //   };

  // },
  // methods: {
  //   login(){
  //     console.log('Logging in...', this.username, this.password);
  //     store.dispatch(types.LOGIN);
  //     this.$router.push({ name: 'todoh' });
  //   },
  // }
  
    };
   
    </script>
