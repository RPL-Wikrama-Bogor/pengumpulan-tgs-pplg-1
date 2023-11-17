<template>
  <div class="row-service">
    <Card v-for="item in data" :img="item.img" :title="item.title" :description="item.description">
      <img :src="item.imgProfile" alt="profile" class="profile">
      <div class="text-profile">
      <b>{{ item.name }}</b>
      <p>{{ item.date }}</p>
    </div>
    </Card>
  </div>
</template>
<script>
import Card from '@/components/my-components/Card.vue';
export default{
  components:{
    Card,
  },
  data(){
    return{
    data: [
      { 
        img: 'lelouch.jpg',
        title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
        description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. Ive got some simple tips to help you make any room feel complete',
        name: 'Lelouch VI Britania',
        date: '31 Oktober 2023',
        imgProfile: 'ucing.png'
      }
    ]
  }
}
}
</script>
<style>
  /* .row-service{
    display: flex;
    justify-content: center;
  } */
  *{
    font-family: Arial, Helvetica, sans-serif;
  }
  .profile {
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 5px;
    width: 60px;
    align-items: center;
    float: left;
    margin-right: 20px;
}

.text-profile {
    text-align: center;
    float: right;
    margin-right: 70px;
    margin-left: 5px;
}
.row-service{
    display: flex;
    justify-content: center;
  }
</style>