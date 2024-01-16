<template>
    <div class="add-todo">
      <form @submit.prevent="addTodo">
        <div class="form-group">
          <input v-model="newTodo.text" type="text" class="form-control" placeholder="Add a new task" />
        </div>
        <div class="form-group">
          <label for="dueDate">Due Date:</label>
          <input v-model="newTodo.dueDate" type="date" id="dueDate" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newTodo: {
          text: '',
          dueDate: '',
        },
      };
    },
    methods: {
      addTodo() {
        if (this.newTodo.text.trim() !== '') {
          this.$emit('addTodo', { ...this.newTodo });
          this.newTodo = {
            text: '',
            dueDate: '',
          };
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .add-todo {
    margin-bottom: 2rem;
  }
  </style>
  