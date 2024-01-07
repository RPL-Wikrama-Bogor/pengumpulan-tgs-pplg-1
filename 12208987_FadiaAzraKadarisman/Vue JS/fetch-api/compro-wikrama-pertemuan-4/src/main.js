import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/portfolio.vue";
import Blog from "@/pages/blog.vue";
import Contact from "@/pages/contact.vue";

const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: "/portofolio",
    component: Portfolio,
  },
  {
    path: "/blog",
    component: Blog,
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

createApp(App).use(router).mount("#app");
