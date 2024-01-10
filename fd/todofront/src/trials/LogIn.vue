<template>
    <div>
    <h2>Login</h2>
    <form @submit.prevent="login">
      <label for="email">Email:</label>
      <input type="email" v-model="email" required />

      <label for="password">Password:</label>
      <input type="password" v-model="password" required />

      <button type="submit">Login</button>
    </form>
  </div>
</template>


<script>
export default {
  data() {
    return {
      email: '',
      password: '',
    };
  },
  methods: {
    login() {
      // Add your authentication logic here
      console.log('Logging in...');
    },
  },
};
</script>