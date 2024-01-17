const state = {
  isAuthenticated: false,
  user: null,
  isToggleOn: false,
};

const mutations = {
  // SET_AUTH(state, payload) {
  //   state.isAuthenticated = payload.isAuthenticated;
  //   state.user = payload.user || null;
  // },
  // SET_AUTH(state, isAuthenticated) {
  //   state.isAuthenticated = isAuthenticated;
  // },
  SET_AUTH(state, data) {
    state.isAuthenticated = data.isAuthenticated;
    },
  // SET_AUTH(state, user) {
  //   state.isAuthenticated = true;
  //   state.user = user;
  // },
  toggle(state) {
    state.isToggleOn = !state.isToggleOn;
  },
};

const actions = {
  login({ commit }, { username, password }) {
    commit('SET_AUTH', { isAuthenticated: true});

    // // Simulate an asynchronous login
    // return new Promise((resolve) => {
    //   setTimeout(() => {
    //     // Assuming login is successful
    //     const user = { username }; // Update this with the actual user data
    //     commit('SET_AUTH', { isAuthenticated: true, user });
    //     resolve();
    //   }, 1000);
    // });
  },
  
  // login({ commit }, credentials) {
  //   // Perform your login logic here
  //   // For simplicity, let's assume a successful login and update the state
  //   const user = { username: credentials.username };
  //   commit('SET_AUTH', user);

  //   // You might also make an API request for authentication
  //   // and commit mutations based on the response
  // },
};

export default {
  state,
  mutations,
  actions,
};


