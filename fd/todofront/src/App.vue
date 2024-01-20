<script setup>
import TodoHomeView from './views/TodoHomeView.vue';
import LandingPageView from './views/LandingPageView.vue';//
</script>
<template>
  <main >
    <router-view/>
  <!-- <div id="app">
      <router-view/>       
    </div> -->
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