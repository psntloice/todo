<template>   
    <div id="welcome-page">
      <section class="hero">
        <img src="../images/TODO.jpeg" alt="Coffee beans background" class="background">
        <div class="content">
          <LogIn/>
          <h1 class="title">TodoWise: Smart Task Management for Modern Life</h1>
          <p class="slogan">Task Management, Redefined for You.</p>
          <a href="#menu" class="cta">Explore Our Coffee Delights</a>
          <div id="landing-page">
    <a href="/login">Login</a>
  </div>
        </div>
      </section>    
    </div>
  </template>

<script>
import LogIn from './LogIn.vue';

export default {
  data() {
    return {
      authenticated: false,
      username: '',
    };
  },
  methods: {
    handleLoginSuccess(username) {
      this.authenticated = true;
      this.username = username;
    },
  },
};
</script>

  
  <style scoped>
/* Add your styles here */
/* General styling */
body {
  font-family: 'Open Sans', sans-serif;
  margin: 0;
  background-color: #f5f5f5;
}

#landing-page {
  max-width: 960px;
  margin: 0 auto;
  padding: 30px;
}

section {
  margin-bottom: 60px;
}

/* Hero section */
.hero {
  background-color: #603e1b; /* Rich brown color */
  color: #fff;
  text-align: center;
}

.hero .background {
  width: 100%;
  height: 400px;
  object-fit: contain;
}

.hero .content {
  padding: 30px;
  position: relative;
  z-index: 1; /* Ensure text visibility over background image */
}

.hero h1 {
  font-size: 40px;
  margin-bottom: 15px;
}

.hero p {
  font-size: 18px;
}

.hero a.cta {
  background-color: #f2d5a6; /* Creamy yellow color */
  color: #4a2d0e; /* Dark brown color */
  padding: 15px 30px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
  .hero .content {
    padding: 15px;
  }

  .hero h1 {
    font-size: 30px;
  }

  .about-us .gallery img {
    width: 50%;
  }

  .menu-items .item {
    width: 100%;
  }
}

/* Additional refinements */
h2.section-title {
  font-size: 30px;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  line-height: 1.5;
}

a {
  color: #4a2d0e; /* Dark brown color */
  text-decoration: none;
}

</style>