<template>

  <Navbar></Navbar>

  <Router-view></Router-view>

</template>
<script>

import Navbar from '@/components/Layouts/Navbar.vue';

export default {
  components: {
    Navbar
  }
}
</script>

