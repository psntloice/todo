<template>
    <div class="feature-card">
      <div class="card-header">
        <i :class="featureIcon"></i>
        <h3>{{ title }}</h3>
      </div>
      <div class="card-body">
        <p>{{ description }}</p>
        <div class="card-actions">
          <button @click="$emit('startTrial')">Start Trial</button>
          <button @click="toggleExpand">
            {{ expanded ? 'Show Less' : 'Learn More' }}
          </button>
        </div>
      </div>
      <div v-if="expanded" class="card-expanded-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'FeatureCard',
    props: {
      title: String,
      description: String,
      featureIcon: String,
    },
    data() {
      return {
        expanded: false,
      };
    },
    methods: {
      toggleExpand() {
        this.expanded = !this.expanded;
      },
      startTrial() {
        this.$emit('startTrial');
      },
    },
  };
  </script>
  
  <style scoped>
  .feature-card {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  
  .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }
  
  .card-header i {
    font-size: 30px;
    margin-right: 10px;
  }
  
  .card-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }
  
  .card-expanded-content {
    margin-top: 10px;
    border-top: 1px solid #ccc;
    padding-top: 15px;
  }
  </style>
  