<template>
    <Navbar></Navbar>
    <div class="container">
        <Beranda :data="DataHome"></Beranda>
        <Service :data="DataLayanan"></Service>
        <Portfolio :data="DataPortofolio"></Portfolio>
        <Blog :data="DataBlog"></Blog>
    </div>
</template>

<script>
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';
export default {
    components: {
        Beranda,
        Service,
        Portfolio,
        Blog
    },
    data() {
        return {
            DataHome: [],
            DataLayanan: [],
            DataPortofolio: [],
            DataBlog: [],
        }
    },
    async created() {
        // api untuk home
        const response = await Get('home');
        this.DataHome = response.data;
        // api untuk layanan
        const responseLayanan = await Get('services');
        this.DataLayanan = responseLayanan.data.data;
        // api untuk portfolio
        const responsePortfolio = await Get('portfolio');
        this.DataPortofolio = responsePortfolio.data.data;
        // api untuk blog
        const responseBlog = await Get('blog');
        this.DataBlog = responseBlog.data.data;
    },
    }

</script>