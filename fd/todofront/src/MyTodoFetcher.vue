<template>
    <div>
      <h1>Loading...</h1>
      <ul v-if="users">
        <li v-for="user in users">
          {{ user.name }} - {{ user.email }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        users: [],
        loading: true,
      };
    },
    methods: {
      fetchUsers() {
        this.loading = true;
        axios.get('/api/todos') // Replace with your actual API endpoint
          .then(response => {
            this.users = response.data;
            this.loading = false;
          })
          .catch(error => {
            console.error(error);
            this.loading = false;
          });
      },
    },
    mounted() {
      this.fetchUsers();
    },
  };
  </script>