<template>

<div class="container">
    <Blog :data="DataBlog">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="cari judul"> 
        </div>
    </Blog>
</div>

</template>


<script>
import { Get } from '@/Api/Index.js';
import Blog from '@/components/Beranda/Blog.vue';

export default{
    components: {
        Blog
    },
    data(){ 
        return{
            DataBlog:[]
        }
    },
    async mounted(){
        const response =await Get('Blog');
        this.DataBlog = response.data.data;
    }
}

</script>