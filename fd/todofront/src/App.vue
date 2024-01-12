<script setup>
import TodoHomeView from './views/TodoHomeView.vue';
import LandingPageView from './views/LandingPageView.vue';
</script>
<template>
  <main >
      <router-view>
        <!-- <LandingPageView v-if="authenticated" @login-success="handleLoginSuccess" /> -->
        <LandingPageView v-if=true />        
      </router-view> 
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