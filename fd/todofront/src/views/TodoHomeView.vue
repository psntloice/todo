<script setup>
import MainHomeView from "./MainHomeView.vue";
</script>

<template>
  <div id="app" >
    <header>
      <button @click="toggleSidebar" class="toggle-btn">&#9776; Toggle Sidebar</button>
      <button class="toggle-btn">&#9776; Home</button>
        <span class="title">Todo App</span>
    </header>
    <main >
      <MainHomeView/> </main>
  </div>
</template>

<script>
export default {
  name: 'todoh',
};
</script>

<style>
body
{
  background-color: #d3cec8; /* Rich brown color */
  height: auto;
  margin: 0;
  padding: 0;
  display: absolute;
  top: 0;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: center;
  color: white;
  margin-top: 0px;
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
  
</style>
