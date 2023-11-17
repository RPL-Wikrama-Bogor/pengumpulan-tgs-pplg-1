<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description" :img="item.img" :name="item.name" :date="item.date"></Card>
  </div>
</template>

<script>
  import Card from '@/components/myComponents/Card.vue';
  export default {
    components:{
      Card,
      'card-service' : Card
    },
    data(){
      return {
        data: [
          {
            title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
            description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. Ive got some simple tips to help you make any room feel complate.',
            name: 'Kayla Ayestha',
            date: '18 Oktober',
            img: 'furniture.jpg'
          }
        ]
      }
    }
  }
</script>

<style>
  
</style>