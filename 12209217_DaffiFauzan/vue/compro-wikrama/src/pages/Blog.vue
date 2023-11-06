<template>
    <div class="container">
        <Blog :data="DataBlog">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul">
            </div>
        </Blog>
    </div>
</template>
<script>
import { Get } from "@/Api/index.js";
import Blog from "@/components/Beranda/Blog.vue";
export default {
    components: {
        Blog
    },
    data() {
        return {
            DataBlog: []
        }
    },
    async mounted() {
        const responseBlog = await Get('http://localhost:9000/api/blog');
        this.DataBlog = responseBlog.data.data;
    },
}
</script>
<style>
.searchTerm {
    border: 1px solid #ccc;
    padding: 10px;
    width: 50%;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
}
</style>