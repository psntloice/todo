<script setup>
import TodoHomeView from './views/TodoHomeView.vue';
import LandingPageView from './views/LandingPageView.vue';//
</script>
<template>
  <main >
  <div id="app">

<!-- added code  -->
<!-- <h1 v-if="isAuthenticated">Welcome to the Home Page!</h1>
    <h1 v-else>Welcome to the Landing Page!</h1> -->

      <router-view/>
        <!-- <LandingPageView v-if="authenticated" @login-success="handleLoginSuccess" /> -->
        <!-- <LandingPageView/> -->
        <!-- <TodoHomeView/> -->
    </div>
      </main>
</template>





<script>
export default {
  data() {
      return {
          authenticated: false,
          username: "",
      };
  },
  name: 'App',

//   added
  computed: {
    isAuthenticated() {
      return this.$store.state.auth.isAuthenticated;
    },
  },


  methods: {
      handleLoginSuccess() {
          //handleLoginSuccess(username) {
          this.authenticated = true;
          this.username = username;
      },
      handleLogin() {
          // Set isLoggedIn to true, triggering welcome component
          this.isLoggedIn = true;
      },

    }
  
};
</script>