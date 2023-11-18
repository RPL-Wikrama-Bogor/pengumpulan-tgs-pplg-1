<template>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
        <Card v-for="(item, index) in data" :key="index" :img="item.img" :title="item.title" :description="item.description" :imgProfile="item.imgProfile" :name="item.name">
          <small>30 November 2023</small>
        </Card>
  </body>

</template>

<script>
import Card from '@/components/my-components/Card.vue';
export default{
  components: {
    Card,
  },
  data() {
    return {
      data: [
        {
          img: 'furniture.jpg',
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. I have got some simple tips to help you make any room feel complete.',
          imgProfile: 'profile.jpg',
          name: 'Aryanti R',
        }
      ]
    }
  }
}
</script>

<style>

body{
  background-color: #DDF2FD;
  font-family: Arial, Helvetica, sans-serif;
}




</style>