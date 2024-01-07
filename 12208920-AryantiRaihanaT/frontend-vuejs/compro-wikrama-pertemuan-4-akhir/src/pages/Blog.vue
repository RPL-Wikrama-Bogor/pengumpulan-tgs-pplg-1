<template>
    <div class="container">
        <Blog :data="DataBlogSearch">
            <div class="search">
                <input v-model="searchTerm" @keyup="handleSearch" type="text" class="searchTerm" placeholder="Cari judul...">
            </div>
        </Blog>
    </div>
</template>

<script>
import { Get } from '@/Api/index.js';
import Blog from '@/components/Beranda/Blog.vue';

export default{
    components: {
        Blog
    },
    data() {
        return {
            DataBlog: [],
            searchTerm: ''
        }
    },
    computed: {
        DataBlogSearch() {
            return this.DataBlog.filter(blog => blog.title.toLowerCase().includes(this.searchTerm.toLowerCase()));
        }
    },
    async mounted() {
        const responseBlog = await Get('blog');
        this.DataBlog = responseBlog.data.data;
    },
    methods: {
        handleSearch() {

        }
    }
}
</script>

<style scoped>
input{
width: 45%;
padding: 12px 15px;
margin-bottom: 25px;
height: 20px;
font-size: 16px;
border: 1px solid #dddddd;
border-radius: 5px;
color: black;
box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
}
</style>