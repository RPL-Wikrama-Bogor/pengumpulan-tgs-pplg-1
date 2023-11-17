<template>
<div class=”container”>
	          <Section1></Section1>
	          <Service></Service>
              <Portofolio></Portofolio>
              <Blog></Blog>
</div>
</template>

<script>
import Section1 from '@/components/Beranda/Section1.vue';
import Service from '@/components/Beranda/Service.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
export default {
		Component: {
			Section1,
			Service,
			Portofolio,
			Blog
          },

          data() {
            return {
                DataHome: []
            }
          },
          async mounted() {
            const response = await Get('http://127.0.0.1:9000');
            console.log(response);
          },
}
</script>

