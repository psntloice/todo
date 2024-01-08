<template>
    <div>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
    import HomePage from './HomePage.vue';
  // No router import or initialization needed
  export default {
    components: {
      HomePage,
    },
      };
  </script>
  