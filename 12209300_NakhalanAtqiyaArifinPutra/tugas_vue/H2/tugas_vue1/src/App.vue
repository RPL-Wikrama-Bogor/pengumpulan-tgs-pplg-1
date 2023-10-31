<template>
   <div class="row-service">
   <Card v-for="item in data" :img1="item.img1" :img2="item.img2" :deskripsi="item.deskripsi" :title="item.title" :name="item.name" :date="item.date">
   </Card>
   </div>
</template>

<script>
import image from "./assets/bocchi.png"
import image2 from "./assets/sky.jpg"
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
            date:"30 Mei 2023"


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