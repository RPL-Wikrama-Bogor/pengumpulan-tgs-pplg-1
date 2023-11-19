<script setup>
import Navbar from '@/components/Layouts/Navbar.vue';
import Footer from '@/components/Layouts/Footer.vue';
// import HomeSection from '@/components/pages/home/HomeSection.vue';
// import ServicesSection from './components/pages/Home/ServiceSection.vue';
// import PortfolioSection from './components/pages/Home/PortfolioSection.vue';
// import BlogSection from './components/pages/Home/BlogSection.vue';
</script>

<template>
    <div id="app">
        <Navbar></Navbar>
        <div class="container">
            <router-view></router-view>
        </div>
        <Footer />
    </div>
</template>