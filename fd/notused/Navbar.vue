<template>
    <nav class="navbar">
      <ul>
        <li><router-link to="/">Home</router-link></li>
        <!-- Add more navigation links as needed -->
      </ul>
    </nav>
  </template>
  
  <script>
  export default {
    name: 'Navbar',
  };
  </script>
  
  <style scoped>
  .navbar {
    background-color: #333;
    padding: 15px;
  }
  
  .navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .navbar li {
    display: inline-block;
    margin-right: 15px;
  }
  
  .navbar a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
  }
  </style>
  