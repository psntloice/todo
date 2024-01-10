<template>
    <div class="hero-section">
      <div class="hero-image-container">
        <img src="./images/adventurecafe.jpeg" alt="Fuel Your Wanderlust. Work Anywhere." class="hero-image">
      </div>
      <div class="hero-content">
        <h1>Fuel Your Wanderlust. Work Anywhere.</h1>
        <p>Discover the freedom to explore and create from any corner of the world.</p>
        <button class="cta-button">Start Your Journey</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    // ...
  };
  </script>
  
  <style scoped>
  .hero-section {
    width: 100%;
    height: 600px; /* Adjust as needed */
    background-color: #f5f5f5; /* Adjust to match your color scheme */
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative; /* For motion effects */
    overflow: hidden; /* To contain motion effects */
  }
  
  .hero-image-container {
    width: 60%; /* Adjust as needed */
    position: relative;
  }
  
  .hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: subtle-pan 10s linear infinite; /* Add motion effect */
  }
  
  .hero-content {
    width: 40%; /* Adjust as needed */
    padding: 30px;
    text-align: center;
  }
  
  .cta-button {
    background-color: #ff9800; /* Adjust to match your color scheme */
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
  }
  
  /* Additional styles for typography, spacing, and responsiveness */
  
  /* Example motion effect */
  @keyframes subtle-pan {
    0% { transform: translateX(0); }
    50% { transform: translateX(-5%); }
    100% { transform: translateX(0); }
  }
  </style>
  