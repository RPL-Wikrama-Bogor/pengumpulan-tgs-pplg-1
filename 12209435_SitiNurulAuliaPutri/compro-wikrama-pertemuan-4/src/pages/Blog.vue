<template>
    <div class="container">
        <Blog :data="filteredData">
            <div class="search">
                <input type="text" class="searchTerm" v-model="input" @keyup="searchBlog" placeholder="Cari judul">
                <button type="button" @click="searchBlog">Kirim</button>
            </div>
        </Blog>
    </div>
</template>

<script>
import { Get } from '@/Api/index.js';
import Blog from '@/components/Beranda/Blog.vue';

export default {
    components: {
        Blog
    },
    data() {
        return {
            DataBlog: [],
            input: '',
        };
    },
    async mounted() {
        await this.fetchData();
    },
    methods: {
        async fetchData() {
            const response = await Get('http://127.0.0.1:9000/api/blog');
            this.DataBlog = response.data.data;
        },
        searchBlog() {
            const lowerInput = this.input.toLowerCase();
            this.filteredData = this.DataBlog.filter((item) => {
                const lowerTitle = item.title.toLowerCase();
                return lowerTitle.includes(lowerInput);
            });
        },
    },
    computed: {
        filteredData() {
            const lowerInput = this.input.toLowerCase();
            return this.DataBlog.filter((item) => {
                const lowerTitle = item.title.toLowerCase();
                return lowerTitle.includes(lowerInput);
            });
        },
    },
};
</script>
