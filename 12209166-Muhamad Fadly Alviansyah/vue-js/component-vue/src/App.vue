<template>
  <div class="row-service">
    <card v-for="item in data" :title="item.title" :description="item.description" >
    <p>
      {{ item.date }}
    </p>
  </card>
    <!-- <card-service title="ini title 2" description="ini description 2"></card-service> -->
  </div>
    <!-- <button class="btn-service">Detail</button> -->
    <MyBtn id="btn-1" name="btn"></MyBtn>
    <MyBtn id="btn-2" name="btn"></MyBtn>
  </template>
  
  <script>
  import Card from '@/components/my-components/card.vue'
  export default {
    components: {
      Card,
      'card-service': Card
    },
    data(){
      return{
        data:[
        {
          title: 'title 1',
          description: 'description 1',
          date: '31 Oktober 2023'
        },
        {
          title: 'title 2',
          description: 'description 2',
          date: '31 Oktober 2023'
        },
        {
          title: 'title 3',
          description: 'description 3',
          date: '31 Oktober 2023'
        }
      ]
  
      }
    }
  }
  </script>
  <style>
  .row-service{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
  } 
  .btn-service-global{
      margin-top: 10px;
      font-size: 16px;
      font-weight: 400;
      color: white;
      background-color: cyan;
      padding: 15px 20px;
      border: none;
      border-radius: 5px;
  }
  </style>