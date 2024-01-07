<template>
    <div class="container">
        <Section1 :data="DataHome"></Section1>
        <Section2 :data="DataLayanan"></Section2>
        <Portfolio :data="DataPortfolio"></Portfolio>
        <Blog :data="DataBlog"></Blog>
    </div>
</template>
<script>
import Section1 from '@/components/Home/Section1.vue';
import Section2 from '@/components/Home/Section2.vue';
import Portfolio from '@/components/Home/Portfolio.vue';
import Blog from '@/components/Home/Blog.vue';

import { Get } from '../Api/index.js'

export default {
    components: {
        Section1,
        Section2,
        Portfolio,
        Blog,
    },
    data() {
        return {
            DataHome: [],
            DataLayanan: [],
            DataPortfolio: [],
            DataBlog: [],
        }
    },

    async created() {
        const { data } = await Get('http://localhost:9000/api/home')
        this.DataHome = data

        const responseService = await Get('http://localhost:9000/api/services')
        this.DataLayanan = responseService.data.data

        const responsePortfolio = await Get('http://localhost:9000/api/portfolio')
        this.DataPortfolio = responsePortfolio.data.data

        const responseBlog = await Get('http://localhost:9000/api/blog')
        this.DataBlog = responseBlog.data.data
    },
}
</script>