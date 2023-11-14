<template>
  <div class="container">
    <div class="blog">
      <Blog :data="filteredBlogs">
        <div class="search text-start">
          <input type="text" v-model="searchTerm" class="searchTerm" placeholder="Cari Judul" />
        </div>
        <div class="row-blog">
          <Card v-for="item in filteredBlogs" :blog="item"></Card>
        </div>
      </Blog>
    </div>
  </div>
</template>

<script>
import { Get } from '@/Api/index.js';
import '@/assets/blog.css';
import Blog from '@/components/Beranda/Blog.vue';
export default {
  components: {
    Blog,
  
  },
  data() {
    return {
      DataBlog: [],
      searchTerm: '',
    };
  },

  computed: {
    filteredBlogs() {
      const searchTerm = this.searchTerm.toLowerCase();
      return this.DataBlog.filter((item) => {
        return item.title.toLowerCase().includes(searchTerm);
      });
    },
  },

  async created() {
    const responseDataBlog = await Get('http://127.0.0.1:9000/api/blog');
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
