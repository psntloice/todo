<template>
    <div>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
    import TlandingPage from './TlandingPage.vue';
  // No router import or initialization needed
  export default {
    components: {
      TlandingPage, 
    },
      };
  </script>
  