<template>
    <Navbar></Navbar>
    <router-view></router-view>
    <div class="container">
    <!-- <Beranda></Beranda>
    <Service></Service>
    <Portofolio></Portofolio>
    <Blog></Blog> -->
  </div>
  </template>
  
  <script>
  import Navbar from '@/components/layouts/Navbar.vue';
  // import Beranda from '@/components/beranda/Beranda.vue';
  // import Service from '@/components/beranda/Service.vue';
  import Portofolio from '@/components/beranda/Portofolio.vue';
  import Blog from '@/components/beranda/Blog.vue';

  import { Get } from '@/Api/index.js';
  export default{
    components: {
      Navbar,
      Beranda,
      Service,
      Portofolio,
      Blog
    },
    data(){
      return {
        DataHome:[]
      }
    },
    async mounted(){
      const response = await Get('http://127.0.0.1:8000/api/home');
      console.log(response);
    },
  }
  </script>