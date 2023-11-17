<template>
    <div class="wrap">
        <div class="card">
            <div class="img-wrap">
                <img :src="'/src/assets/img/' +image" alt="" srcset="">
            </div>
            <div class="text-wrap">
                <h3>{{ judul }}</h3>
          <div v-html="text"></div>
          <slot></slot>
            </div>
        </div>
    </div>
    </template>
    
    <script>
    export default {
        // mengambill data dari luar atau file lain
        // nama props == nama bind attribute dicomponent nya tempat data dikirim
        props: ['image', 'title', 'description', 'name', 'date'],
    }
    </script>
    
    <style scoped>
    .wrap {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 25px;
        
    }
    .card {
        display:flex;
        text-align: start;
        min-height: 150px;
        padding: 0px;
        box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.05);
        border-radius: 10px;
        background: cornsilk;
        transition: all 0.5s ease;
        margin: 200px 20px;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    .img-wrap {
        width: 45%;
        height: 100%;
        position: relative;
    
    }
    .text-wrap {
        width: 65%;
        height: 100%;
        padding: 10px;
        display: flex;
    }
    .img-wrap img {
        width: 100%;
        height: 100%;
        display: flex;
        border-radius: 10px 0px 0px 10px;
    }
    </style>