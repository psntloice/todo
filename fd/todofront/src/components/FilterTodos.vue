<template>
    <div class="filter-todos">
      <button @click="changeFilter('all')" :class="{ active: filter === 'all' }">All</button>
      <button @click="changeFilter('active')" :class="{ active: filter === 'active' }">Active</button>
      <button @click="changeFilter('completed')" :class="{ active: filter === 'completed' }">Completed</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        filter: 'all',
      };
    },
    methods: {
      changeFilter(filter) {
        this.filter = filter;
        this.$emit('changeFilter', filter);
      },
    },
  };
  </script>
  
  <style scoped>
  .filter-todos {
    margin-bottom: 1rem;
  }
  
  .filter-todos button {
    margin-right: 0.5rem;
  }
  
  .active {
    background-color: #41b883;
    color: white;
  }
  </style>
  