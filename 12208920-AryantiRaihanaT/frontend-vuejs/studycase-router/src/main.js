import { createRouter, createWebHistory } from "vue-router";
import { createApp } from "vue";

import App from './App.vue'
import Beranda from '@/components/Beranda/Beranda.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Contact from '@/components/Beranda/Contact.vue';

const routes = [
    {
        path: "/",
        component: Beranda
    },
    {
        path: "/portfolio",
        component: Portfolio
        
    },
    {
        path: "/blog",
        component: Blog
    },
    {
        path: "/contact",
        component: Contact
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

createApp(App).use(router).mount('#app')
