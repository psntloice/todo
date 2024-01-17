<template>
    <div>
      <h1>{{ photo.title }}</h1>
      <img :src="photo.imageUrl" alt="">
      </div>
  </template>
  
  <script>
  export default {
    computed: {
      photo() {
        const photoId = this.$route.params.photoId;
        // Find the photo object by ID
        return this.photos.find(photo => photo.id === photoId);
      },
    },
  };
  </script>
  