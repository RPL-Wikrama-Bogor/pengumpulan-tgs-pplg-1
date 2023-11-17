import "@/assets/style.css";

// import route
import { createRouter, createWebHistory } from "vue-router";
// import vue
import { createApp } from 'vue';
// import file vue
import App from './App.vue';
// import components pages nya
import Home from '@/pages/Home.vue';
import Portfolio from '@/pages/Portofolio.vue';
import Blog from '@/pages/Blog.vue';
import Contact from '@/pages/Contact.vue';

const routes = [
    {
    path: '/',
    component: Home,
    name: "Home",
}, 
{
    path: '/Portfolio',
    component: Portfolio,
    
},
{
    path: '/Blog',
    component: Blog,
    name: "Blog",
},
{
    path: '/Contact',
    component: Contact,
    name: "Contact",
},
]
const router = createRouter ({
    history: createWebHistory(),
    routes,
});

// routing
createApp(App).use(router).mount('#app')

