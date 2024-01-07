<template>

    <div class="container">
        <Beranda :data="DataHome"></Beranda>
        <Service :data="DataLayanan"></Service>
        <Portfolio></Portfolio>
        <Blog></Blog>
    </div>

</template>

<script>

import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/Index.js';

export default{
    components:{
        Beranda,
        Service,
        Portfolio,
        Blog
    },
    data(){
        return{
            DataHome:[],
            DataLayanan:[]
        }
    },
    async created(){
        //API untuk Home
        const response = await Get('http://127.0.0.1:9000/api/home');
        this.DataHome = response.data;
        console.log(this.DataHome);
        //API untuk Layanan 
        const responseLayanan = await Get('http://127.0.0.1:9000/api/services');
        this.DataLayanan = responseLayanan.data.data;
        console.log(this.DataLayanan);
    },
}

</script>