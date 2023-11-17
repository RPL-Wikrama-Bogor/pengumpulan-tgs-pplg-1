import '@/assets/style.css'
import '@/assets/blog.css'
import { createRouter, createWebHistory} from "vue-router";
import { createApp } from 'vue';
import App from './App.vue';
// import Beranda from "@/pages/Beranda.vue";
// import Portofolio from "@/pages/Portofolio.vue";
// import Blog from "@/pages/Blog.vue";
import Beranda from '@/components/beranda/Beranda.vue';
// import Service from '@/components/beranda/Service.vue';
import Portofolio from '@/components/beranda/Portofolio.vue';
import Blog from '@/components/beranda/Blog.vue';

const routes = [
    {
        path: '/',
        component: Beranda,
        name: 'Beranda'
    },
    {
        path: '/Portofolio',
        component: Portofolio,
        name: 'Portofolio'
    },
    {
        path: '/Blog',
        component: Blog,
        name: 'Blog'
    },
    // {
    //     path: '/Contact',
    //     component: Contact,
    //     name: 'Contact'
    // }
];
const router = createRouter({
    history: createWebHistory(),
    routes, 
});

createApp(App).use(router).mount('#app')