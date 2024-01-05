<template>
    <div>
      <h1>Loading Todo...</h1>
          <ul v-if="users">
        <li v-for="user in users">
          {{ user.name }} - {{ user.email }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
////////////////////////////////////////////////////////////////added axios
import axios from 'axios';

axios.get('/api/users')
  .then(response => {
    // Handle successful response
    console.log(response.data); // Access the fetched data
  })
  .catch(error => {
    // Handle errors
    console.error(error);
  });

  axios.post('/api/posts', {
  title: 'New Post',
  content: 'This is the content of the post'
})
  .then(response => {
    // Handle successful post creation
    console.log(response.data); // Access the created post data
  })
  .catch(error => {
    // Handle errors
    console.error(error);
  });


  ///////////////////////////////////////////////////////////////////
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