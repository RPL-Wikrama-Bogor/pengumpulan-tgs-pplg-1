<template>
    <div>
      <div class="topnav container" :class="{ responsive: navbarActive }">
        <div class="logo">
          <div><img src="@/assets/img/logo.png" alt="logo"></div>
          <a class="icon" @click="navbar">
            <img src="@/assets/img/hamburger.svg" alt="hamburger">
          </a>
        </div>
        <div class="menu">
          <router-link to="/" >Home</router-link>
          <router-link to="/Portfolio" >Portofolio</router-link>
          <router-link :to="{ name: 'Blog'}" >Blog</router-link>
          <router-link :to="{ name: 'Contact'}" >Contact</router-link>

        </div>
      </div>
    </div>
  </template>

  <script>
    export default {
        data() {
            return {
                navbarActive: false,
            }
        },
        methods: {
            navbar() {
                if(this.navbarActive) {
                    this.navbarActive = false;
                } else {
                    this.navbarActive = true;
                }
            }
        }
    }
</script>
  
  <style scoped>
    .topnav{
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
      color: black;
      border-bottom: 2px solid skyblue;
    }
    .topnav a.active {
      background-color: steelblue;
      color:skyblue;
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
  </style>