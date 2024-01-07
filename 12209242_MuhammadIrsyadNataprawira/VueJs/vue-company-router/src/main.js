import './assets/style.css'

import { createApp } from 'vue'
import {createRouter, createWebHistory} from 'vue-router'
import Home from './views/Home.vue'
import Portfolio from './views/Portfolio.vue'
import Blog from './views/Blog.vue'
import Contact from './views/Contact.vue'
import ComingSoon from './components/utils/ComingSoon.vue'
import App from './App.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/portfolio',
            component: Portfolio
        },
        {
            path: '/blog',
            component: Blog
        },
        {
            path: '/contact',
            component: Contact
        },
        {
            path: '/comingsoon',
            component: ComingSoon
        }
    ]
})

createApp(App).use(router).mount('#app')
