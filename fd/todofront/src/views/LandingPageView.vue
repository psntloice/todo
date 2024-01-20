<template>
    <div id="landing-page">
      <h1 class="title">Smart Task Management for Modern Life</h1>
      <section class="hero">
        <img
            src="../images/TODO.jpeg"
            alt="Coffee beans background"
            class="background"
          />
        </section>      
      
          <section>            
          <h2 class="slogan">Task Management, Redefined for You.</h2>
           <router-link to="/login">Log In</router-link>          
        </section>
    </div>
  </template>
  
  <script>
  export default {
    name: 'landpage',
  };
  </script>

  <style scoped>
    body {
    font-family: "Open Sans", sans-serif;
    margin: 0;
    background-color: #f5f5f5;
  }
  
  #landing-page {
    max-width: 960px;
    margin: 0 auto;
    padding: 30px;
  }
  
  section {
    margin-bottom: 40px;
  }
  
  /* Hero section */
  .hero {
    background-color: #a0886f; /* Rich brown color */
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
  }
  
  /* Additional refinements */
  h2.section-title {
    font-size: 30px;
    margin-bottom: 20px;
  }
  
  a {
    color: #4a2d0e; /* Dark brown color */
    text-decoration: none;
  }
  
  </style>
  
  