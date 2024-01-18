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
  },
});
