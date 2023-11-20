import "./assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Blog from "@/pages/Blog.vue";
import Contact from "@/pages/Contact.vue";

const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: "/portfolio",
    name: "portfolio",
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

import { createApp } from "vue";
import App from "./App.vue";

createApp(App).use(router).mount("#app");
