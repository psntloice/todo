// src/store/index.js
// import Vue from 'vue';
// import Vuex from 'vuex';
// import auth from './auth';

// Vue.use(Vuex);
//sto
// export default new Vuex.Store({
//   modules: {
//     auth,
//   },
// });
import { createStore } from 'vuex';
import auth from './auth';
// import todos from './todos';

export default createStore({
  modules: {
    auth,
    // todos,
    // ...other modules
  },
});




// import { createStore } from 'vuex';
// import authModule from './modules/auth.js';

// export default createStore({
//   modules: {
//     auth: authModule,
//   },
// });