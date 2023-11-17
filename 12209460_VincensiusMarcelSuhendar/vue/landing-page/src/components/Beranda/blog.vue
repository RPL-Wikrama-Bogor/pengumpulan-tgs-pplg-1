<template>
    <div id="blog" class="blog blog-section">
        <h3>Blog</h3>
        <slot></slot>
        <div class="row-blog">
            <cardblog v-for="item in data" :blog="item"></cardblog>            
        </div>
    </div>
</template>
<script>
import "@/assets/blog.css"
import cardblog from "@/components/my-components/cardblog.vue"
export default{
    components:{
        cardblog,
    },  
    props:['data']
}
</script>
<style>
</style>