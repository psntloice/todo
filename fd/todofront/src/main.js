import { createApp } from 'vue'
import App from './App.vue';
import router from './router'; // Import the router instance


import store from './store'; // Import your Vuex store

// createApp(App).use(store).mount('#app');

//Vue.config.productionTip = false;

// const app = createApp(App)

createApp(App)
  .use(store).use(router)
  .mount('#app');

// app.use(router)
// app.use(store)

// app.mount('#app')

