<template>
  <div>
    <div class="topnav container" :class="{responsive: navbarActive}">
      <div class="logo">
        <div><img src="@/assets/img/logo.png" alt="logo"></div>
        <a class="icon">
          <img src="@/assets/img/hamburger.svg" @click="navbar" alt="hamburger">
        </a>
      </div>
        <div class="menu">
          <router-link to="/"> <p> Beranda </p> </router-link> 
          <router-link to="/portofolio"> <p>Portofolio</p> </router-link>
          <router-link to="/blog"> <p>Blog</p> </router-link>
          <router-link to="/contact"> <p>Contact</p> </router-link>
        </div>
      </div>
    </div>
  </template>
  <script>
  export default{
    data() {
        return {
            navbarActive: false
        }
    },
    methods: {
        navbar(){
            if(this.navbarActive){
                this.navbarActive = false;
            } else{
                this.navbarActive = true;
            }
        }
    }
  }

</script>
  
  <style scope>
  p{
    font-family: 'Raleway', sans-serif;
  }

  .topnav{
    overflow: hidden;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .topnav a{
    float: left;
    color: black;
    text-align: center;
    padding: 0px 18px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover{
    border-bottom: 2px solid #4c55c4;
    /* margin-top: -25px; */
  }
  
  .topnav a:hover{
    color: black;
  }
  
  .topnav a.active{
    background-color: #04AA6D;
    color: white;
  }
  
  .topnav .icon{
    display: none;
  }
  
  .logo{
    display: flex;
    justify-content: space-between;
    max-width: 100%;
    padding: 10px;
  }
  
  @media screen and (max-width: 600px){
    .topnav{
      display: block;
      padding: 0;
    }
  
    .topnav .menu a{
      display: none;
    }
  
    .topnav a.icon{
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive{
      position: relative;
      display: block;
    }
  
    .topnav.responsive a{
      float: none;
      display: block;
      text-align: left;
    }
  }
  
  </style>