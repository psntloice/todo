import { createApp } from 'vue'
import App from './App.vue';
import router from './router'; // Import the router instance

//Vue.config.productionTip = false;

const app = createApp(App)

app.use(router)

app.mount('#app')

