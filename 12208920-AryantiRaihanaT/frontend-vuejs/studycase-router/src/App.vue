<template>
  <Navbar></Navbar>
  <div class="container">
    <router-view></router-view>
    
    <!-- <Beranda></Beranda>
    <Portfolio></Portfolio>
    <Blog></Blog> -->
   
  </div>
</template>
<script>
import Navbar from '@/components/Layouts/Navbar.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Contact from '@/components/Beranda/Contact.vue';

export default {
  components: {
    Navbar,
    Beranda,
    Service,
    Portfolio,
    Blog,
    Contact
  }
}
</script>
