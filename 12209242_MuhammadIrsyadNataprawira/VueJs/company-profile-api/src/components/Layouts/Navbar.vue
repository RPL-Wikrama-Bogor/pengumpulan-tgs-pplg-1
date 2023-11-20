<template>
    <div class="topnav container" :class="{ responsive: navbarActive }" id="myTopnav">
        <div class="logo">
            <div><img src="@/assets/img/logo.png" alt=""></div>
            <a class="icon" @click="navbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
        </div>
        <div class="menu" :class="{ responsive: navbarActive }">
            <RouterLink to="/">Beranda</RouterLink>
            <RouterLink to="/portfolio">Portfolio</RouterLink>
            <RouterLink to="/blog">Blog</RouterLink>
            <RouterLink to="/contact">Contact</RouterLink>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            navbarActive: false
        }
    },
    methods: {
        navbar() {
            this.navbarActive ? this.navbarActive = false : this.navbarActive = true;
        }
    }
}
</script>
<style>
/* navbar */
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

.topnav a:hover {
    color: black;
}

.topnav a.active {
    background-color: #04AA6D;
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

@media screen and (max-width: 600px) {
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
}

@media screen and (max-width: 600px) {
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

/* navbar */
</style>