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
import Blog from "@/components/Beranda/Blog.vue";
export default {
  components: {
    Blog,
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
        handleSearch() {}
    }
}
</script>