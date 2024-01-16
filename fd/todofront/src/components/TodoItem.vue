<template>
    <div class="todo-item">
      <input type="checkbox" v-model="todo.completed" />
      <span :class="{ completed: todo.completed }">{{ todo.text }}</span>
      <button @click="deleteTodo" class="btn btn-danger btn-sm">Delete</button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      todo: Object,
    },
    methods: {
      deleteTodo() {
        this.$emit('deleteTodo', this.todo.id);
      },
    },
  };
  </script>
  
  <style scoped>
  .todo-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
  }
  
  .completed {
    text-decoration: line-through;
  }
  </style>
  