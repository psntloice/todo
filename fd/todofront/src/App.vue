<template>
  <div id="app" class="router-links-container">
    <header>
      <nav>
        <router-link to="/">Start</router-link> |
        <router-link to="/l2">About</router-link> |
        <router-link to="/about">About</router-link> |
        <router-link to="/contact">Contact</router-link>
      </nav>
    </header>
    <main>
      <router-view></router-view> </main>
  </div>
</template>

<style>
.router-links-container {
  display: grid;
  place-items: center; /* Center content both horizontally and vertically */
}
</style>
