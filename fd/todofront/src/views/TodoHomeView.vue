<script setup>
import MainHomeView from "./MainHomeView.vue";
import ToggleButton from '../components/ToggleButton.vue';
</script>

<template>
  <div id="app" >
    <header>
      <ToggleButton />
      <button @click="reload" class="home-button">
    <i class="fas fa-home"></i> ⌂ Home 
  </button>
        <span class="title">Todo App</span>
    </header>
    <main >
      <MainHomeView/> </main>
  </div>
</template>

<script>
export default {
  name: 'todoh',
  methods: {
    reload() {
            // this.$router.push('/todoh');
             // Reload the page
      window.location.reload();
    },
  },
   components: {
    ToggleButton,
  },
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
  .title {
    flex-grow: 1;
    text-align: center;
    color: white;
  }
  .home-button {
    background-color: #5d4e3f; /* Darker shade for button */
    color: white;
    padding: 0.5rem;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  margin-left: 6px;
}
/* .home-button i {
  margin-left: 8px;
} */
.home-button:hover {
  background-color: #b0b4b8;
}
</style>
