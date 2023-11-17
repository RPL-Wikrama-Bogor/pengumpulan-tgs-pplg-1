<template>
  <div class="container">
    <div class="blog">
      <div class="search text-start">
        <input type="text" class="searchTerm" placeholder="Cari Judul" v-model="input" />
      </div>
      <div class="row-blog">
        <Card v-for="item in filteredBlogs" :blog="item"></Card>
      </div>
      <div v-if="filteredBlogs.length == 0">
        <h1>No result found!</h1>
      </div>
    </div>
  </div>
</template>

<script>
import { Get } from '@/Api/index.js';
import '@/assets/blog.css';
import Card from '../components/Blog/Card.vue'
export default {
  components: {
    Card,
  },
  data() {
    return {
      DataBlog: [],
      input: '',
    };
  },

  computed: {
    filteredBlogs() {
      const searchTerm = this.input.toLowerCase();
      return this.DataBlog.filter((item) => {
        const lowerTitle = item.title.toLowerCase();
        return lowerTitle.includes(searchTerm);
      });
    },
  },

  async created() {
    const { data } = await Get('http://127.0.0.1:8000/api/blog');
    this.DataBlog = data.data;
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
