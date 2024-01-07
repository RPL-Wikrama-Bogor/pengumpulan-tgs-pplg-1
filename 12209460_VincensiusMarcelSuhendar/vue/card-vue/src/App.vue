<template class="row-service">
  
  <Card v-for="item in data"
   :title="item.title" :desc="item.desc" :img="item.img" 
   :pfp="item.pfp" :btn="item.btn" :nama="item.nama" :tanggal="item.tanggal" :link="item.link">
    <card-service></card-service>
  </Card>


</template>
<script>
import Card from '@/components/my-components/Card.vue'
export default {
  components:{
    Card,
    'card-service': Card,
  },
  data(){
    return{
      data:[
        {
          title:"Hyperborea",
          desc: "A mythical northern wonderland, Hyperborea was allegedly a sunny, temperate, and divinely-blessed land.",
          nama: "Vincensius Marcel",
          tanggal: "31 Oct 2023",
          img:"hy2.jpg",
          pfp:"pfp.jpg",
          btn:"arw.png",
          link:"https://vinms.my.id/"
        },
        {
          title:"The Exodus",
          desc: "The Exodus is the founding myth of the Israelites whose narrative is spread over four books of the Pentateuch.",
          nama: "Rifan Ghazy Pradana",
          tanggal: "1 Nov 2023",
          img:"hy1.png",
          pfp:"pfp2.png",
          btn:"arw.png",
          link:"https://www.instagram.com/rifan.ghazy/"
        },
      ]
    }
  }
}
</script>
<style>
  .row-service{
    display:grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
  }
  .btn-service-global{
        margin: 10px 0 0 1.8rem;
        font-size: 16px;
        font-weight:400;
        color: white;
        background-color: #6C87D6;
        padding: 15px 20px;
        border: none;
        border-radius: 10px;
        transition: 0.3s;
    }
  .btn-service-global:hover{
    background-color: #485192;
  }
</style>