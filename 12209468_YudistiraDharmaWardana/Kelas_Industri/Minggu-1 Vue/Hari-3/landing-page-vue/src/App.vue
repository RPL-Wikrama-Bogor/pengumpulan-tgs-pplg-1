<template>

<navbar></navbar>
<div class="container">
  <Beranda></Beranda>
  <Service></Service>
  <Portofolio></Portofolio>
  <Blog></Blog>
</div>

</template>

<script>

import Navbar from '@/components/layout/Navbar.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';

export default {
  components:{
    Navbar,
    Beranda,
    Service,
    Portofolio,
    Blog
  }
}




</script>