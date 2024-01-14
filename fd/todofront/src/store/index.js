// src/store/index.js
// import Vue from 'vue';
// import Vuex from 'vuex';
// import auth from './auth';

// Vue.use(Vuex);

// export default new Vuex.Store({
//   modules: {
//     auth,
//   },
// });

import { createStore } from 'vuex';
import authModule from './auth.js';

export default createStore({
  modules: {
    auth: authModule,
  },
});