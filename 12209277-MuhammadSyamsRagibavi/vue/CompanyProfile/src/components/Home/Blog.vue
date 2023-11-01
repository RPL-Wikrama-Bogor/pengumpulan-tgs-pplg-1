<template>
    <div class="blog blog-section">
        <h3> Blog</h3>

        <div class="row-blog">
            <CardBlog></CardBlog>
        </div>
        <div class="read-more">
            <a href="">Lihat lebih banyak</a>
        </div>
    </div>
</template>
<script>
import '@/assets/blog.css';
import CardBlog from '@/components/Blog/CardBlog.vue';
export default {
    components: {
        CardBlog
    }
}
</script>