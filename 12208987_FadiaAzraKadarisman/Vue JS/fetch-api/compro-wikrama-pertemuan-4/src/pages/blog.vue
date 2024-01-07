<template>
    <div class="container">
        <div class="blog">
            <h3>Blog</h3>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul" @keyup="search" v-model="searchTerm">
            </div>
            <div class="row-blog">
                <Card v-for="item in filteredDataBlog" :blog="item" :key="item.id"></Card>
            </div>
        </div>
    </div>
</template>
<script>
import "@/assets/blog.css";
import Card from '@/components/Blog/Card.vue';
import { Get } from '@/Api/index.js';

export default {
    props: ['data'],
    components: {
        Card,
    },
    data() {
        return {
            DataBlog: [],
            searchTerm: '' // Data untuk menyimpan kata kunci pencarian
        }
    },
    async created() {
        const response = await Get('http://127.0.0.1:9000/api/blog');
        console.log(response);
        this.DataBlog = response.data.data;
    },
    computed: {
        filteredDataBlog() {
            // Filter data blog sesuai dengan searchTerm
            return this.DataBlog.filter(item => item.title.toLowerCase().includes(this.searchTerm.toLowerCase()));
        }
    },
    methods: {
        async search() {
            // Metode pencarian akan dipanggil saat ada keyup
            // Anda dapat menetapkan nilai searchTerm sesuai dengan input pengguna
            // Ini akan mengaktifkan filter pada computed property filteredDataBlog
            // yang akan secara otomatis menampilkan hasil pencarian yang sesuai.

            // Anda juga dapat menambahkan logika pencarian API di sini.
            // Contoh: Memanggil metode pencarian API
            // const response = await SearchAPI(this.searchTerm);

            // Setelah menerima hasil pencarian dari API, Anda dapat memperbarui DataBlog dengan hasilnya.
            // this.DataBlog = response.data;

            // Jika Anda tidak menggunakan API, Anda dapat mengganti data langsung berdasarkan searchTerm.
            // Contoh: this.DataBlog = this.DataBlog.filter(item => item.title.toLowerCase().includes(this.searchTerm.toLowerCase()));
        }
    }
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