import "@/assets/style.css";

import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";

import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Blog from "@/pages/Blog.vue";
import Contact from "@/pages/Contact.vue";

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
    path: "/Blog",
    name: "Blog",
    component: Blog
  },
  {
    path: "/Contact",
    name: "Contact",
    component: Contact
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
