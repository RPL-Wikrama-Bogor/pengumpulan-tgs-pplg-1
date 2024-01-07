<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description" :img="item.img" :date="item.date" :name="item.name" :tanggal="item.tanggal">
    </Card>

  </div>
</template>


<script>
import Card from '@/components/my-components/Card.vue';

export default {
  components: {
    Card,
    'card-service': Card
  },
  data() {
    return {
      data: [
        {
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home ',
          description: "Ever been in a room and felt like something was missing? Perhaps it felt slighty bare and univiting, i've got some simple tips to help you make any room feel complete",
          date: '31 Oktober',
          img: 'miles.png',
          name: 'servasius vencel',
          tanggal: '1 november 2023'
        }
      ]
    }
  }
}
</script>
