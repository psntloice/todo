<template>
    <div>
      <FeatureCard
        v-for="feature in features"
        :key="feature.id"
        :title="feature.title"
        :description="feature.description"
        :featureIcon="feature.icon"
        @startTrial="handleStartTrial"
      />
    </div>
  </template>
  
  <script>
  import FeatureCard from './FeatureCard.vue';
  
  export default {
    components: {
      FeatureCard,
    },
    data() {
      return {
        features: [
          { id: 1, title: 'Feature 1', description: 'Description 1', icon: 'icon-feature1' },
          // ... more features
        ],
      };
    },
    methods: {
      handleStartTrial() {
        // Handle navigation or other actions for trial initiation
      },
    },
  };
  </script>
  