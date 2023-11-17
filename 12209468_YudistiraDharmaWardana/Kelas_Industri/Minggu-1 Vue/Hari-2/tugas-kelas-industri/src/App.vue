<template>

<div class="row-service">
  <card v-for="item in data" :title="item.title" :description="item.description" :name="item.name" :date="item.date">
  </card>
</div>
</template>

<script>

import Card from '@/components/my-component/card.vue';
export default{
  components:{
    Card
  }, 
  data(){
    return{
      data:[
        {
        title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
        description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting Ive got some simple tips to help you make any room feel complete',
        name: 'Yudistira Dw',
        date: '31 oktober 2023'
        },
      ],
    }
  }
}

</script>
