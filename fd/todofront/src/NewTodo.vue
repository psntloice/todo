<template>
    <div id="app">
      <h1>My To-Do List</h1>
      <input type="text" v-model="newTodo" placeholder="Enter a new to-do">
      <button @click="addNewTodo">Add</button>
      <ul>
        <li v-for="todo in todos">{{ todo }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        todos: [], // Array to store to-do items
        newTodo: "", // Input field value for new to-dos
      };
    },
    methods: {
      addNewTodo() {
        // Add the new to-do item to the "todos" array
        this.todos.push(this.newTodo);
        // Clear the input field
        this.newTodo = "";
      },
    },
  };
  </script>
  
  <style>
  /* Basic styling for your to-do list */
  </style>
<!-- This code defines a simple Vue component called App.
The template section defines the HTML structure of the app, including an input field for adding new to-dos, a button, and a list to display the to-dos.
The data object holds the reactive state of the app, including an array of todos and a placeholder variable newTodo.
The methods object defines a function addNewTodo that gets triggered when the "Add" button is clicked. This function adds the value of newTodo to the todos array and clears the input field.
The v-model directive binds the input field value to the newTodo variable, enabling two-way data binding.
The v-for directive iterates over the todos array and displays each item in a separate list item.   -->