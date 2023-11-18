import "@/assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import { createApp } from "vue";

import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Contact from "@/pages/Contact.vue";
import Blog from "@/pages/Blog.vue";

import App from "@/App.vue";
const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/Portfolio",
        name: "Portfolio",
        component: Portfolio
    },
    {
        path: "/Contact",
        name: "Contact",
        component: Contact,
    },
    {
        path: "/Blog",
        name: "Blog",
        component: Blog,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount("#app");