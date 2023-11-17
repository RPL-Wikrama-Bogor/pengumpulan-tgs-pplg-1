<template>
  
  <Navbar></Navbar>
  <!-- <div class="container">
  <Beranda></Beranda>
  <Service></Service>
  <Portofolio></Portofolio>
  <Blog></Blog>
  
  </div> -->
  <!-- untuk menampilkan components dari route -->
  <div class="container">
  <router-view></router-view>
  </div>
</template>

<script>
import Navbar from '@/components/layouts/Navbar.vue';
// import Beranda from '@/components/beranda/Beranda.vue';
// import Service from '@/components/beranda/Service.vue';
// import Portofolio from '@/components/beranda/Portofolio.vue';
// import Blog from '@/components/beranda/Blog.vue';
// import Card from '@/components/portofolio/Card.vue';
// import Card from '@/components/Service/Card.vue';

export default {
  components: {
    Navbar,
    // Beranda,
    // Service, 
    // Portofolio,
    // Blog
    // Card
  }
}
</script>