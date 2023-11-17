<template>
  <div class="container">
    <Card v-for="item in data" :image="item.image" :title="item.title" :description="item.description" :avatar="item.avatar" :name="item.name" :date="item.date"></Card>
  </div>
</template>

<script>
import Card from './components/my-components/Card.vue';
export default {
  components: {
    Card
  },
  data() {
    return {
      data: [
        {
          image: 'image1.jpg',
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: "Ever been in a room and felt like something was nothing? Perhaps it felt slightly bare and uninviting. I've got some simple tips to help you make any room feel complete.",
          avatar: 'profile1.jpg',
          name: 'Fadly Alviansyah',
          date: '31 October 2023',
        },
        {
          image: 'image1.jpg',
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: "Ever been in a room and felt like something was nothing? Perhaps it felt slightly bare and uninviting. I've got some simple tips to help you make any room feel complete.",
          avatar: 'profile1.jpg',
          name: 'Fadly Alviansyah',
          date: '31 October 2023',
        }
      ]
    }
  }
}
</script>

<style>

body{
  background: aliceblue;
}

.container{
  min-height: 100vh;
  display: grid;
  grid-template-columns: repeat(1.5, 1fr);
  grid-gap: 10px;
  place-content: center;
}

</style>