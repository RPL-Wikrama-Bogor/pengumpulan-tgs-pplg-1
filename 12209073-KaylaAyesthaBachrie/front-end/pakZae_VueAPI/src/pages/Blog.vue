<template>
    <div class="container">
        <div class="blog">
            <h3> Blog</h3>
            <slot></slot>
            <div class="search text-start">
                <input type="text" class="searchTerm" placeholder="Cari Judul" v-model="input" />
            </div>
            <div class="row-blog">
                <Card v-for="item in DataBlog" :blog="item"></Card>
            </div>
            <div v-if="filteredBlogs.length == 0">
                <h1>No result found!</h1>
            </div>
        </div>
    </div>
</template>
<script >
    import Card from '@/components/Blog/Card.vue';
    import { Get } from '@/Api/index.js';
    export default{
        components: {
            Card
        },
        data(){
            return{
                DataBlog: [],
                input: '',
            };
        },
        computed: {
            filteredBlogs(){
                const searchTerm = this.input.toLowerCase();
                return this.DataBlog.filter((item) => {
                    const lowerTitle = item .title.toLowerCase();
                    return lowerTitle.includes(searchTerm);
                });
            },
        },
        async mounted(){
            const response = await Get('http://127.0.0.1:9000/api/blog');
            console.log(response);
            console.log(response.status);
            this.DataBlog=response.data.data;
            console.log(this.DataBlog);
        },
    }
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