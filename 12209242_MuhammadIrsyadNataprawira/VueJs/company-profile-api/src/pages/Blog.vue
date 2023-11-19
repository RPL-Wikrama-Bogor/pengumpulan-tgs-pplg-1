<template>
  <div class="container">
    <div class="blog">
      <h3>Blog</h3>
      <div class="search">
        <input
          v-model="input"
          type="text"
          class="searchTerm"
          placeholder="Cari judul"
        />
      </div>
      <div class="row-blog">
        <CardBlog v-for="item in filteredBlog" :blog="item"></CardBlog>
        <div v-if="filteredBlog.length === 0">
          <div class="card">
            <h1>No result found!</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import "@/assets/blog.css";
import CardBlog from "@/components/Blog/CardBlog.vue";
import { Get } from "../Api";
export default {
  components: {
    CardBlog,
  },
  computed: {
    filteredBlog() {
      const lowerInput = this.input.toLowerCase();
      return this.DataBlog.filter((item) => {
        const lowerTitle = item.title.toLowerCase();
        return lowerTitle.includes(lowerInput);
      });
    },
  },
  data() {
    return {
      DataBlog: [],
      input: ''
    };
  },
  async mounted() {
    const { data } = await Get("http://localhost:9000/api/blog");
    this.DataBlog = data.data;
  },
};
</script>
