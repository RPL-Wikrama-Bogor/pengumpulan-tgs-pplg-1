<template>

<div class="row-service">
  <card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p>
  </card>
</div>

<button class="btn-service">detail</button>
<MyBtn id="btn1" name="btn"></MyBtn>
</template>

<script>

import Card from '@/components/my-component/card.vue';
export default{
  components:{
    Card,
    'card-service': Card
  }, 
  data(){
    return{
      data:[
        {
        title: 'title 1',
        description: 'description 2',
        date: '31 oktober 2023'
        },
        {
        title: 'title ',
        description: 'description 1',
        date: '1 november 2023'
        },  
      ],
    }
  }
}

</script>

<style>

.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #4c55c4;  
    padding: 15px 20px;
    border: none;
    border-radius: 5px;

}
.btn-service-global{
    margin-top: 10px;
    margin-bottom: 50px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #55ba29;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;

}

.row-service{
  display: grid;
  grid-template-columns:  repeat(3 ,1fr);
  grid-gap: 10px;;
}

</style>