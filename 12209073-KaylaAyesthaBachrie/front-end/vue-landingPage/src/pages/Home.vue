<template>
    <div class="container">
    <Beranda> :data="DataHome"</Beranda>
    <Service> :data="DataService"</Service>
    <Portofolio></Portofolio>
    <Blog></Blog>
  </div>
  </template>

<script>
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';

import { Get } from '@/Api/index.js';
export default{
  components: {
    Beranda,
    Service,
    Portfolio,
    Blog
  },
  data(){
    return {
      DataHome:[]
    }
  },
  async mounted(){
    // api untuk home
    const response = await Get('http://127.0.0.1:9000/api/home');
    this.DataHome = response.data;
    // api untuk service
    constService = await Get('http://127.0.0.1:9000/api/services');
    this.DataService = responseService.data.data;
  },
}
</script>