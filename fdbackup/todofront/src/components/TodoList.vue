<template>
    <div class="todo-list">
      <div v-for="todo in filteredTodos" :key="todo.id" class="todo-item">
        <input type="checkbox" v-model="todo.completed" />
        <span :class="{ completed: todo.completed }">{{ todo.text }}</span>
        <span v-if="todo.dueDate" class="due-date">Due: {{ todo.dueDate }}</span>
        <button @click="deleteTodo" class="btn btn-danger btn-sm">Delete</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      filteredTodos: Array,
    },
    methods: {
      deleteTodo() {
        this.$emit('deleteTodo', this.todo.id);
      },
    },
  };
  </script>
  
  <style scoped>
  .todo-list {
    margin-top: 2rem;
  }
  
  .todo-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
  }
  
  .completed {
    text-decoration: line-through;
  }
  
  .due-date {
    margin-left: auto; /* Push due date to the right */
    margin-left: 1rem;
    color: #888;
  }
  </style>
  