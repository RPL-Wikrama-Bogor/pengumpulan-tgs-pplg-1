<template>
    <div class="blog blog-section">
        <h3> Blog</h3>

        <div class="row-blog">
            <CardBlog v-for="item in data" :blog="item"></CardBlog>
        </div>
        <div class="read-more">
            <RouterLink to="/blog">Lihat lebih banyak</RouterLink>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import CardBlog from '@/components/Blog/CardBlog.vue';
export default {
    props: ["data"],
    components: {
        CardBlog
    }
}
</script>