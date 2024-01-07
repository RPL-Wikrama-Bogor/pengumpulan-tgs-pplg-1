<script setup>
import '@/assets/blog.css';
import CardBlog from '@/components/utils/CardBlog.vue';
</script>
<template>
    <div class="blog blog-section">
        <h3> Blog</h3>
        <div class="row-blog">
            <CardBlog></CardBlog>
            <CardBlog></CardBlog>
        </div>
        <div class="read-more">
        </div>
    </div>
</template>
