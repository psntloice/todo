<template>
  <div class="login-container">
    <form @submit.prevent="handleLogin">
      <label for="username">Username:</label>
      <input v-model="username" type="text" id="username" required />

      <label for="password">Password:</label>
      <input v-model="password" type="password" id="password" required />

      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script>
import { ref } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';

export default {
  name: 'login',
  setup() {
    const store = useStore();
    const router = useRouter();
    const username = ref('');
    const password = ref('');

    const handleLogin = () => {
      // Simulate a successful login
      store.dispatch('login', { username: username.value, password: password.value });

      // After a successful login, redirect to the desired page
      router.push('/todoh'); // Adjust the path as needed
    };


    return {
      username,
      password,
      handleLogin,
    };
  },
};
</script>

<style scoped>
.login-container {
  max-width: 300px;
  margin: 0 auto;
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

label {
  font-weight: bold;
}

input {
  padding: 5px;
}

button {
  background-color: #3498db;
  color: white;
  padding: 10px;
  cursor: pointer;
}
</style>
