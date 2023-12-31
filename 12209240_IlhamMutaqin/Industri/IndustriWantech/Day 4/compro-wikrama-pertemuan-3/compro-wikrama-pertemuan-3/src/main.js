import "@/assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import { createApp } from "vue";

import Home from "@/pages/Home.vue";
import Portofolio from "@/pages/Portofolio.vue";
import Blog from "@/pages/Blog.vue";
import Contact from "@/pages/Contact.vue";
import App from "./App.vue";
const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/portofolio",
    name: 'Portfolio',
    component: Portofolio,
  },
  {
    path: "/Blog",
    name: "Blog",
    component: Blog,
  },
  {
    path: "/Contact",
    name: "Contact",
    component: Contact,
  },
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
