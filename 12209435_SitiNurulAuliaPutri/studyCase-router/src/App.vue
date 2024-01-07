<template>
  <Navbar></Navbar>
  <div class="container">

    <router-view></router-view>
  </div>
</template>

<script>
import Navbar from '@/components/Layouts/Navbar.vue';
import Service from '@/components/Beranda/Service.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Contact from '@/components/Beranda/Contact.vue';

export default {
  components: {
    Navbar,
    Service,
    Beranda,
    Portofolio,
    Blog,
    Contact
  }
}
</script>