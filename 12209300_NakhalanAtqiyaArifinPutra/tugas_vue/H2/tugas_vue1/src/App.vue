<template>
   <div class="row-service">
   <Card v-for="item in data" :img1="item.img1" :img2="item.img2" :deskripsi="item.deskripsi" :title="item.title" :name="item.name" :date="item.date" :sheare="item.sheare" :link="item.link">
   </Card>
   </div>
</template>

<script>
import image from "./assets/bocchi.png"
import image2 from "./assets/sky.jpg"
import image3 from "./assets/drawing.jpeg"
import image4 from "./assets/hero.jpeg"
import sheare from "./assets/logo.png"

import Card from '@/components/my-components/card.vue';
export default{
   components:{
      Card,
      'card-word' : Card
   },
   data(){
      return{
         data:[
            {
            img1: image,
            img2: image2,
            title:'KEREN BANGET GAMBAR INI UWAGHHHHH!!',
            deskripsi:'Ini sangat indah sekali, walau pun hanya sebuah gambar dan hanya bisa dilihat di layar handphone saja tapi ini sangat keren. aku seorang yang menyukai hal yang berbau dengan awan dan langit ini sangat LUAR BIASA!!',
            name:"Hitori Bocchi",
            date:"1:59 PM 30 Okt 2023",
            link:"https://www.youtube.com/",
            sheare: sheare
            },
            {
            img1: image3,
            img2: image4,
            title:'Apa-apaan dunia ini penuh dengan kebijakan yang ngelantur',
            deskripsi:'Banyak yang kita dari kta sadar bahwa dunia ini adalah lautan duniawi ',
            name:"Rasya Alamsyah",
            date:"1:53 PM 29 Nov 2023",
            link: "https://www.youtube.com/",
            sheare: sheare
            }
         ]
      }
   }
}
</script>
<style>
.row-service{
   grid-template-columns: repeat(3,1fr);
   grid-gap: 10x;
 }
</style>