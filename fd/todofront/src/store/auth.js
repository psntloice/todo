// store/modules/auth.js
const state = {
  isAuthenticated: false,
  user: null,
  isToggleOn: false,
};

const mutations = {
  SET_AUTH(state, user) {
    state.isAuthenticated = true;
    state.user = user;
  },
  toggle(state) {
    state.isToggleOn = !state.isToggleOn;
  },
};

const actions = {
  login({ commit }, credentials) {
    // Perform your login logic here
    // For simplicity, let's assume a successful login and update the state
    const user = { username: credentials.username };
    commit('SET_AUTH', user);

    // You might also make an API request for authentication
    // and commit mutations based on the response
  },
};

export default {
  state,
  mutations,
  actions,
};


