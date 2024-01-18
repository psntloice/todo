const state = {
  isAuthenticated: false,
  user: null,
  isToggleOn: false,
};

const mutations = {
    SET_AUTH(state, data) {
    state.isAuthenticated = data.isAuthenticated;
    state.user = data.user || null;
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
    // Simulate a successful login for demonstration purposes
    if (username === 'demo' && password === 'password') {
      const user = { username }; // Update this with the actual user data
      commit('SET_AUTH', { isAuthenticated: true, user });
      return Promise.resolve(true); // Resolve the promise for a successful login
    } else {
      return Promise.reject(new Error('Invalid username or password'));
        }
  },


    // // Simulate an asynchronous login
    // return new Promise((resolve) => {
    //   setTimeout(() => {
    //     // Assuming login is successful
    //     const user = { username }; // Update this with the actual user data
    //     commit('SET_AUTH', { isAuthenticated: true, user });
    //     resolve();
    //   }, 1000);
    // });
 // },
  
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


