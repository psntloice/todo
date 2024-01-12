
<template>
    <div class="login-container">
      <h2>Login</h2>
      <form @submit.prevent="login" class="login-form">
        <label for="username">Username:</label>
        <input v-model="username" type="text" id="username" required />
        <br />
  
        <label for="password">Password:</label>
        <input v-model="password" type="password" id="password" required />
        <br />
  
        <button type="submit" class="login-button">Login</button>
      </form>
    </div>
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
        login() {
          // Implement your authentication logic here
          console.log('Logging in...', this.username, this.password);
          // You can integrate with an authentication service or use a simple logic here
        },
      },
    };
    </script>

  <style scoped>
  /* Add your styles here */
  /* Use the scoped attribute to ensure these styles are only applied to this component */

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