<template>
  <Navbar></Navbar>
  <router-view></router-view>
  <Footer></Footer>
</template>

<script>
import Navbar from '@/components/Layouts/Navbar.vue';
export default {
  components: {
    Navbar
  }
}
</script>
<style scope></style>
