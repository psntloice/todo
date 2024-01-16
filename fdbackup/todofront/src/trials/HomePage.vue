<template>
    <div>
      <h1>Photo Gallery</h1>
      <ul>
        <li v-for="photo in photos" :key="photo.id">
          <router-link :to="{ name: 'photo-details', params: { photoId: photo.id } }">
            {{ photo.title }}
          </router-link>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        photos: [
          { id: 1, title: "Sunrise at the beach", imageUrl: "https://example.com/images/beach-sunrise.jpg" },
          { id: 2, title: "Hike through the forest", imageUrl: "https://example.com/images/forest-hike.jpg" },
          { id: 3, title: "Cozy coffee shop interior", imageUrl: "https://example.com/images/coffee-shop.jpg" },
          // ... add more photos as needed
        ],
      };
    },
  };
  </script>
  