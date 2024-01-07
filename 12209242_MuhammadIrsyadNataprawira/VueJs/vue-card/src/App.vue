<script setup>
import Card from "./components/Card.vue";

const data = [
    {
        title: 'Vue Js',
        description: 'Vue Js adalah salah satu framework Javascript yang Populer',
        author: 'Isadvue',
        tanggal: '21 Oktober 2023',
        profile: '../public/image/profile1.jpg',
        img: '../public/image/Vue icon.png'
      },
      {
      title: 'React',
      description: 'React adalah salah satu Library Javascript yang Populer',
      author: 'Isadreact',
      tanggal: '8 Agustus 2023',
      profile: '../public/image/profile2.jpeg',
      img: '../public/image/react-icon-512x456-5xl7nmtw.png'
    },
]
</script>

<template>
  <div class="container" v-for="_ in data">
    <Card :Title="_.title" :Desc="_.description" :Author="_.author" :Tanggal="_.tanggal" :Profile="_.profile" :Img="_.img"/>
  </div>  
</template>
