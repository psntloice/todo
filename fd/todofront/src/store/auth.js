// src/store/auth.js
export default {
    state: {
      isAuthenticated: false,
    },
    mutations: {
      setAuthentication(state, isAuthenticated) {
        state.isAuthenticated = isAuthenticated;
      },
    },
    // methods: {
    //     login(){
    //         isAuthenticated: false;
    //     }
    // },
    actions: {
        LOGIN({ commit }) {
          // Your login logic here
          console.log('LOGIN action triggered');
          commit('setAuthentication', true);
          console.log('LOGIN action triggered');
        },
        LOGOUT({ commit }) {
          // Your logout logic here
          commit('setAuthentication', false);
        },
        // Add more actions as needed
      },
  };
  