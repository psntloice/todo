<template>
  <div v-if="isOpen" class="sidebar">

    <div class="sidebar">
      <button @click="changePane('all')" :class="{ active: activePane === 'all' }">All Tasks</button>
      <button @click="changePane('active')" :class="{ active: activePane === 'active' }">Active Tasks</button>
      <button @click="changePane('completed')" :class="{ active: activePane === 'completed' }">Completed Tasks</button>
    </div>

    </div>
  </template>
  
  <script>
  import { mapState } from 'vuex';

  
  export default {
    data() {
      return {
        activePane: 'all',
      };
    },
    methods: {
      changePane(pane) {
        this.activePane = pane;
        this.$emit('changePane', pane);
      },
    },
    computed: {
    ...mapState('sidebar', ['isOpen']),
  },
  };
  </script>
  
  <style scoped>
  .sidebar {
    width: 150px;
    background-color: #333;
    color: white;
    padding: 1rem;
    display: flex;
    flex-direction: column;
  }
  
  button {
    margin-bottom: 0.5rem;
    padding: 0.5rem;
    border: none;
    background-color: transparent;
    color: white;
    cursor: pointer;
  }
  
  .active {
    background-color: #41b883;
  }
  </style>
  