<template>
  <div class="container">
    <div class="blog">
      <Blog :data="DataBlog">
        <div class="search text-start">
          <input type="text" class="searchTerm" placeholder="Cari Judul" @keyup="searchBlog" />
        </div>
        <div class="row-blog">
          <Card v-for="item in DataBlog" :blog="item"></Card>
        </div>
      </Blog>
    </div>
  </div>
</template>

<script>
import { Get } from '@/Api/index.js';
import '@/assets/blog.css';
import Card from '@/components/Blog/Card.vue';
import Blog from '@/components/Beranda/Blog.vue';
export default {
  components: {
    Blog,
  },
  data() {
    return {
      DataBlog: [],
    };
  },

  methods: {
  searchBlog() {
    const searchTerm = this.searchTerm.toLowerCase();
    this.DataBlog = responseDataBlog.data.data.filter((item) => {
      return item.title.toLowerCase().includes(searchTerm);
    });
  },  
},



  async created() {
    // const response = await Get('blog');
    // this.DataBlog = response.data.data;

    const responseDataBlog = await Get('http://127.0.0.1:8000/api/blog');
    this.DataBlog = responseDataBlog.data.data;
  },
};
</script>

<style>

.searchTerm {
  width: 100%;
  max-width: 400px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}

</style>