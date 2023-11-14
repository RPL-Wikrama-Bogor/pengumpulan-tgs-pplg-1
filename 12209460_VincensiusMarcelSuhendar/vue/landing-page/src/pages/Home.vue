<template>
    <div class="container">
      <beranda :data="DataHome"></beranda>  
      <service :data="DataLayanan"></service>
      <porto :data="DataPortfolio"></porto>
      <blog :data="DataBlog"></blog>
    </div>
  
    
  </template>
  <script>
  import beranda from "@/components/Beranda/beranda.vue";
  import service from "@/components/Beranda/service.vue";
  import porto from "@/components/Beranda/porto.vue";
  import blog from "@/components/Beranda/blog.vue";
  import { Get } from '@/api/index.js';
  export default {
    components:{
      beranda,
      service,
      porto,
      blog
    },
    data(){
        return{
            DataHome: [],
            DataLayanan: [],
            DataPortfolio:[],
            DataBlog:[]
        }
    },
    async created(){
        const response = await Get('home');
        this.DataHome = response.data;
        const responseLayanan = await Get('services');
        this.DataLayanan = responseLayanan.data.data;
        const responsePortfolio = await Get('portfolio');
        this.DataPortfolio = responsePortfolio.data.data;
        const responseBlog = await Get('blog');
        this.DataBlog = responseBlog.data.data;
    },
  }
  
  </script>
  <style>
    
  </style>
  