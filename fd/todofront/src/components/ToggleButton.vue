<template>
          <button @click="toggleSidebar" class="toggle-btn">&#9776;</button>
  </template>
  
  <script>
  export default {
    methods: {
      toggleSidebar() {
        this.$store.commit('sidebar/toggle');
      },
    },
  };
  </script>
  
  <style>
.toggle-btn {
    padding: 0.5rem;
    background-color: #5d4e3f; /* Darker shade for button */
    color: white;
    border: none;
    cursor: pointer;
  }
</style>