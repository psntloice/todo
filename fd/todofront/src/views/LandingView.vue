<template>
  <div class="hero-section">
    <img src="../images/adventurecafe.jpeg" alt="Your Landing Page Hero" class="hero-image">
    <div class="hero-content">
      <h1>Your Catchy Headline</h1>
      <p>A concise and enticing subheading describing your offer.</p>
      <button class="cta-button">Get Started</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    // Add any props you need for customization (e.g., image source)
  },
};
</script>

<style scoped>
.hero-section {
height: 100vh; /* Occupy full viewport height */
display: flex;
align-items: center;
justify-content: space-between;
background-color: #f5f5f5; /* Adjust to your color scheme */
}

.hero-image {
width: 50%;
height: 100%; /* Match the section height */
object-fit: cover; /* Scale image proportionally */
}
/* .hero-section {
  background-color: #f5f5f5; /* Adjust to your color scheme */
  /* display: flex;
  align-items: center;
  justify-content: space-between;
}

.hero-image {
  width: 50%;
  height: 400px;
  object-fit: cover;
} */ 

.hero-content {
  width: 50%;
  padding: 30px;
  text-align: center;
}

.cta-button {
  background-color: #ff9800; /* Adjust to your color scheme */
  color: white;
  border: none;
  padding: 15px 30px;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
}
</style>
