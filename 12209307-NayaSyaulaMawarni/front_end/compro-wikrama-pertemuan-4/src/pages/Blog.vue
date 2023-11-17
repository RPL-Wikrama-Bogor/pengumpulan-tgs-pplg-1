<template>
    
    <div class="container">
        <Blog :data="DataBlog">
            <!-- <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul">
            </div> -->
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari judul" aria-label="Search">
                </form>
            </nav>
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
            DataBlog: []
        }
    },
    async mounted() {
        const responseBlog = await Get('blog');
        this.DataBlog = responseBlog.data.data;
    },
}
</script>