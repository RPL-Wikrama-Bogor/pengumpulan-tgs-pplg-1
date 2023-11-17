import '@/assets/style.css'
import { createApp } from 'vue';
import App from './App.vue';
import { createRouter, createWebHistory} from "vue-router";
import Home from "@/pages/Home.vue";

import Beranda from '@/components/Beranda/.vue';
import Beranda from '@/components/Beranda/.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';

const routes = [
    {
        path: '/',
        component: Home,
        name: 'Home'
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes, 
});

createApp(App).use(router).mount('#app')