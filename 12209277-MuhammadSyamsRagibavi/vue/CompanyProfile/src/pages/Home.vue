<template>
    <div class="container">
        <Section1></Section1>
        <Section2></Section2>
        <Portfolio></Portfolio>
        <Blog></Blog>
    </div>
</template>
<script>
import Section1 from '@/components/Home/Section1.vue';
import Section2 from '@/components/Home/Section2.vue';
import Portfolio from '@/components/Home/Portfolio.vue';
import Blog from '@/components/Home/Blog.vue';
export default {
    components: {
        Section1,
        Section2,
        Portfolio,
        Blog,
    }
}
</script>