import { createStore } from "vuex";
import auth from "./auth";

export default createStore({
  modules: {
    auth,
    sidebar: {
      namespaced: true,
      state: {
        isOpen: false,
      },
      mutations: {
        toggle(state) {
          state.isOpen = !state.isOpen;
        },
      },
    },
    
    // myauth: {
    //   namespaced: true,
    //   state: {
    //     isAuthenticated: false,
    //   },
    //   mutations: {
    //     SET_AUTH(state, user) {
    //       state.isAuthenticated = true;
    //       state.user = user;
    //     },
    //   },
    // },
  },
});
