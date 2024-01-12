<script setup>
import WelcomePage from '../components/WelcomePage.vue'
import LogIn from '../components/LogIn.vue';
</script>

<template>
    <main>

      <div id="landing-page">
        <WelcomePage/>
        </div>
    <div v-if="!isLoggedIn">
      <login-component @login="handleLogin"></login-component>
    </div>
        
  </main>
</template>

<script>
export default {
  methods: {
    handleLogin() {
      // Set isLoggedIn to true, triggering welcome component
      this.isLoggedIn = true;
    },
  },
};
</script>