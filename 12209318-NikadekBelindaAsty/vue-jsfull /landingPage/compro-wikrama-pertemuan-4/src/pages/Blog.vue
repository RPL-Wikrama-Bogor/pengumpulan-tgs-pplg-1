<!-- <template>
    <div class="cointaner">
        <div class="blog blog-section">
            <h3> Blog</h3>
            <slot></slot>
            <div class="row-blog">
                <Card v-for="item in DataBlog" :blog="item"></Card>
            </div>
        </div>
    </div>
</template>

<script>
import Card from '@/components/Blog/Card.vue';
import { Get } from '@/Api/index.js';
export default {
    components: {
        Card
    },
    data(){
        return{
            DataBlog: []
        }
    },
    async mounted(){
        const response = await Get('http://127.0.0.1:9001/api/blog');
        this.DataBlog = response.data.data;

    }
}
</script> -->

<template>
    <div class="container">
        <Blog :data="displayedBlogs">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari judul" ref="searchField">
                <button class="search-button" @click="searchPosts">Cari</button>
                <button class="search-button" @click="cancelSearch">Batal</button>
            </div>
        </Blog>
    </div>
</template>

<script>
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';
export default {
    components: {
        Blog
    },
    data(){
        return{
            DataBlog: [],
            FilteredBlogs:[],
            isFiltered:false,
        }
    },
    methods:{
      cancelSearch(){
        this.FilteredBlogs = []
        this.isFiltered = false;
      },
      searchPosts(){
        const keyword = this.$refs.searchField.value;
        const filteredBlogs = this.DataBlog.filter((value)=> value.title.toLowerCase().includes(keyword.toLowerCase()))
        this.FilteredBlogs = filteredBlogs
        this.isFiltered = true
      }  
    },
    computed:{
        displayedBlogs() {
        return this.isFiltered ? this.FilteredBlogs : this.DataBlog;
        }
    },
    async mounted(){
        const response = await Get('blog');
        this.DataBlog = response.data.data;

    }
}
</script>

<style scoped>

  .searchTerm {
    width: 400px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-right: 10px;
    margin-bottom: 20px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
  }

  /* Button Styles */
  .search-button {
    padding: 10px 15px;
    font-size: 16px;
    background-color: #4c55c4;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 5px;
  }

  .search-button:hover {
    background-color: #4c55c4;
}
</style>
