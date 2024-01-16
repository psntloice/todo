<template>
    <div id="apphome">
      <header>
        <button @click="toggleSidebar" class="toggle-btn">&#9776; Toggle Sidebar</button>
        <span class="title">Todo App</span>
      </header>
      <div class="container">
        <div :class="{ 'sidebar-hidden': sidebarHidden }" class="sidebar">
          <side-bar @changePane="changePane" />
        </div>
        <div class="main-content">
          <add-todo @addTodo="addTodo" />
          <todo-list v-if="activePane === 'all'" :filteredTodos="todos" @deleteTodo="deleteTodo" />
          <todo-list v-if="activePane === 'active'" :filteredTodos="activeTodos" @deleteTodo="deleteTodo" />
          <todo-list v-if="activePane === 'completed'" :filteredTodos="completedTodos" @deleteTodo="deleteTodo" />
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import TodoList from '../components/TodoList.vue';
  import AddTodo from '../components/AddTodo.vue';
  import SideBar from '../components/SideBar.vue';
  
  export default {
    name: 'App',
    components: {
      TodoList,
      AddTodo,
      SideBar,
    },
    data() {
      return {
        todos: [],
        activePane: 'all',
        sidebarHidden: false,
      };
    },
    computed: {
      activeTodos() {
        return this.todos.filter(todo => !todo.completed);
      },
      completedTodos() {
        return this.todos.filter(todo => todo.completed);
      },
    },
    methods: {
      addTodo(todo) {
        this.todos.push({
          id: Date.now(),
          text: todo.text,
          dueDate: todo.dueDate,
          completed: false,
        });
      },
      deleteTodo(id) {
        this.todos = this.todos.filter(todo => todo.id !== id);
      },
      changePane(pane) {
        this.activePane = pane;
      },
      toggleSidebar() {
        this.sidebarHidden = !this.sidebarHidden;
      },
    },
  };
  </script>
  
  <style>
  #apphome {
    font-family: 'Arial', sans-serif;
  }
 
  header {
    background-color: #a0886f; /* Coffee theme color */
    color: white;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .toggle-btn {
    padding: 0.5rem;
    background-color: #5d4e3f; /* Darker shade for button */
    color: white;
    border: none;
    cursor: pointer;
  }
  
  .title {
    flex-grow: 1;
    text-align: center;
    color: white;
  }
  
  
  
  
  .container {
    display: flex;
    height: calc(100vh - 2rem); /* Adjust for header height */
  }
  
  .sidebar {
    width: 250px;
    background-color: #eee;
    padding: 1rem;
    transition: margin-left 0.3s;
  }
  
  .sidebar-hidden {
    margin-left: -250px;
  }
  
  .main-content {
    flex-grow: 1;
    padding: 1rem;
    overflow-y: auto;
  }
  </style>
  