<template>
    <div id="landing-page">
      <section class="hero">
        <img src="../images/coffee2.jpeg" alt="Coffee beans background" class="background">
        <div class="content">
          <h1 class="title">Brewtiful Moments, One Sip at a Time</h1>
          <p class="slogan">Welcome to The Coffee Bean, your caffeine haven & cozy corner.</p>
          <a href="#menu" class="cta">Explore Our Coffee Delights</a>
        </div>
      </section>
  
      <section class="about-us">
        <h2 class="section-title">About The Coffee Bean</h2>
        <p>We're more than just coffee, we're an experience. We craft every cup with passion, using ethically sourced beans & time-honored techniques. It's not just a drink, it's a moment to connect, relax, & savor the good things in life.</p>
        <div class="gallery">
          <img src="../images/cafeinterior.jpeg" alt="Cozy cafe interior">
          <img src="../images/barista.jpeg" alt="Smiling barista making coffee">
          <img src="../images/customersenjoy.jpeg" alt="Happy customers enjoying coffee">
        </div>
      </section>
  
      <section class="menu" id="menu">
        <h2 class="section-title">Indulge in Your Coffee Bliss</h2>
        <div class="menu-items">
          <div class="item" v-for="item in menuItems" :key="item.title">
            <img :src="item.image" :alt="item.title">
            <h3>{{ item.title }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </section>
  
      <section class="contact-location">
        <h2 class="section-title">Find Your Perfect Cup</h2>
        <div class="address">
          <p>The Coffee Bean, 123 Main Street, Yourtown, CA</p>
          <a href="tel:+1234567890">(123) 456-7890</a>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.35230242594!2d-117.18430435841845!3d34.052235482004845!4d3!e0!3m9!1f1!2f0!3f0!4!5f1.2!6f0!7f1492844348!8f66!9h=https%3A%2F%2Fwww.yourbusinesswebsite.com!0e-1-k8!11u69!12u63!13m4!1m3!1d1!2i37!3s1492844348" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
    </div>
  </template>
  
  <script>
  export default {
  data() {
    return {
      menuItems: [
        {
          title: "Espresso Delights",
          image: "@/assets/latte-art-cappuccino.jpg",
          description: "Espresso, macchiatos, cappuccinos, lattes – we've got all your Italian classics, crafted with precision & love. Feel the caffeine kick!",
        },
        {
          title: "Slow Brew Sensations",
          image: "@/assets/pour-over-coffee-brewing.jpg",
          description: "Savor the subtle flavors of our pour-over coffees, meticulously brewed to perfection for a truly artisanal experience. Let the slow-roasted goodness awaken your senses.",
        },
        {
          title: "Cold Brews & Refreshments",
          image: "@/assets/iced-coffee-with-straw.jpg",
          description: "Beat the heat with our refreshing iced coffees, smoothies, and teas, perfect for any summer day. Stay cool & caffeinated!",
        },
      ],
    };
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
  object-fit: cover;
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

/* About us section */
.about-us {
  text-align: center;
}

.about-us .gallery {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
}

.about-us .gallery img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  border-radius: 5px;
}

/* Menu section */
.menu h2 {
  text-align: center;
  margin-bottom: 30px;
}

.menu-items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.menu-items .item {
  width: 45%;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 20px;
}

.menu-items .item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  margin-bottom: 15px;
}
/* Contact and location section (continued) */
.contact-location a {
  color: #4a2d0e; /* Dark brown color */
  text-decoration: none;
}

.contact-location iframe {
  border-radius: 5px;
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