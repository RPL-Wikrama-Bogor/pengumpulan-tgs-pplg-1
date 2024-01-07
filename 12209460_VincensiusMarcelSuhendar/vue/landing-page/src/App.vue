<template>
  <navbar></navbar>
  <router-view></router-view>
</template>
<script>
import navbar from "@/components/my-components/navbar.vue"

export default {
  components:{
    navbar

  },
}
</script>