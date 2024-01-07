<template>
    <Navbar></Navbar>
    <div class="container">
       <Beranda></Beranda>
       <Service></Service>
       <Portofolio></Portofolio>
       <Blog></Blog>
    </div>
   
  </template>
  
  <script>
  import Beranda from '@/components/Beranda/Beranda.vue';
  import Service from '@/components/Beranda/Service.vue';
  import Portofolio from '@/components/Beranda/Portofolio.vue';
  import Blog from '@/components/Beranda/Blog.vue';
  
  export default {
    components: {
      Beranda,
      Service,
      Portofolio,
      Blog
    },
  }
  </script>