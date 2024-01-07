<script setup>
import { ref } from "vue";

const navbarActive = ref(false)

const navbar = () => {
    navbarActive.value = !navbarActive.value
}
</script>

<template>
    <div>
        <div class="topnav container" :class="{ responsive: navbarActive }">
            <div class="logo">
                <div>
                    <img src="@/assets/image/logo.png" alt="logo">
                </div>
                <a @click="navbar" class="icon">
                    <img src="@/assets/image/hamburger.svg" alt="hamburger">
                </a>
            </div>
            <div class="menu">
                <router-link to="/">Home</router-link>
                <router-link to="/portfolio">Portfolio</router-link>
                <router-link to="/blog">Blog</router-link>
                <router-link to="/contact">Contact</router-link>
            </div>
        </div>
    </div>
</template>

<style scoped>
.topnav {
    overflow: hidden;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.topnav a {
    float: left;
    color: black;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    border-bottom: 2px solid #4c55c4;
}

.topnav a.active {
    background-color: #04aa6d;
    color: white;
}

.topnav .icon {
    display: none;
}

.logo {
    display: flex;
    justify-content: space-between;
    max-width: 100%;
    padding: 10px;
}

@media (max-width: 600px) {
    .topnav {
        display: block;
        padding: 0;
    }

    .topnav .menu a {
        display: none;
    }

    .topnav a.icon {
        float: right;
        display: block;
    }

    .topnav.responsive {
        position: relative;
        display: block;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}
</style>
