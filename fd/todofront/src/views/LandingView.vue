<template>
  <div id="app" >
    <header id="mainheader" class="router-links-container">
      <nav >
        <router-link to="/">Start</router-link> |
        <router-link to="/l2">Home</router-link> |
        <router-link to="/about">About</router-link> |
        <router-link to="/contact">Contact</router-link>
      </nav>
    </header>
    <main >
      <router-view></router-view> </main>
  </div>
</template>

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
#mainheader{
  max-height: fit-content;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: center;
  color: white;
  margin-top: 0px;
}
.router-links-container {
  display: grid;
  place-items: center; /* Center content both horizontally and vertically */
}

</style>
