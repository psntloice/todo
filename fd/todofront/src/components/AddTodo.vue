<template>
      <!-- <form @submit.prevent="addTodo">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input v-model="newTodo.text" type="text" class="form-control" placeholder="Add a new task" />
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="dueDate">Due Date:</label>
        <input v-model="newTodo.dueDate" type="date" id="dueDate" class="form-control" />
      </div>
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary btn-block">Add Task</button>
    </div>
  </div>
</form> -->

      <form @submit.prevent="addTodo">
        <div class="form-row">
          <div class="form-group">
      <label for="taskInput">Add a new task:</label>
      <input v-model="newTodo.text" type="text" id="taskInput" class="form-control" placeholder="Add a new task" />
    </div>
    <div class="form-group">
      <label for="dueDate">Due Date:</label>
      <input v-model="newTodo.dueDate" type="date" id="dueDate" class="form-control" />
    </div>
     
        <button type="submit" class="btn btn-primary">Add Task</button>
      </div>
      </form>
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
 
  /* <!-- Using Bootstrap CDN --> */
  /* @import url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'); */
  /* .add-todo {
    margin-bottom: 2rem;
    display: flex;
    justify-content: space-between;
    max-width: 600px; 
    margin: 0 auto; 
  } */
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .form-row {
    display: flex;
    width: 100%;
    justify-content: center;
  }

  .form-group {
    width: 70%; /* Adjust the width as needed */
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
  }

  #taskInput {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  #dueDate {
    width: auto; /* Normal width for Due Date input */
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  .btn-primary {
    width: auto;
    padding: 15px 30px; /* Adjust padding for a bigger button */
    align-self: flex-end;
    background-color: #41b883; /* Green background color */
    color: white; /* White text color */
    border: none; /* No border */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer;
    font-size: 16px;
  }
  
  .btn-primary:hover {
    background-color: #45a049; /* Darker green on hover */
  }
     
  </style>
  