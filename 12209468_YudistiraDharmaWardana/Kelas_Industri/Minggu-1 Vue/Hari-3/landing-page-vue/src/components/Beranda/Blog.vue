<template>

<div class="blog blog-section">
    <h3>Blog</h3>
    <div class="row-blog">
        <Card></Card>
        <Card></Card>

    </div>
</div>

</template>

<script>

import Card from '@/components/Blog/Card.vue';
import '@/assets/blog.css';

export default{
    components:{
        Card
    }
}

</script>