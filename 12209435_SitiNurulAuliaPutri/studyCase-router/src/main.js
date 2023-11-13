import { createRouter, createWebHistory } from "vue-router";

import './assets/style.css'
import { createApp } from 'vue'
import App from './App.vue'
import Beranda from '@/components/Beranda/Beranda.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Service from '@/components/Beranda/Service.vue';
import Contact from '@/components/Beranda/Contact.vue';


const routes = [
    {
        path: "/",
        component: Beranda,
    },
    {
        path: "/portofolio",
        component: Portofolio,
    },
    {
        path: "/blog",
        component: Blog,
    },
    {
        path: "/service",
        component: Service,
    },
    {
        path: "/contact",
        component: Contact,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');
