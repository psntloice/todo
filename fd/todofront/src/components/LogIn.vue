<template>
  <div class="login-container">
    <h2>Login</h2>
    <form @submit.prevent="handleLogin" class="login-form">
      <label for="username">Username:</label>
      <input v-model="username" type="text" placeholder="Username" id="username" required />
      <br />
      <label for="password">Password:</label>
      <input v-model="password" type="password" placeholder="Password" id="password" required />
      <br />
      <button type="submit" class="login-button" >Login</button>
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
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .login-form {
  display: flex;
  flex-direction: column;
  gap: 15px; /* Increase gap for more spacing between elements */
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
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  button {
    padding: 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #2980b9;
  }
  .login-button {
  background-color: #4a2d0e; /* Dark brown */
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.login-button span {
  margin-right: 5px;
}

.login-button i {
  font-size: 18px;
}

.login-button:hover {
  background-color: #5a3e0f;
}
</style>
