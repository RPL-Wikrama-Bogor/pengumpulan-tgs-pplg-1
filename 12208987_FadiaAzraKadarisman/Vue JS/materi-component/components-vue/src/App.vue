<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
    <!-- <card-service title="title 2" descriptions="description 2"></card-service> -->
  </div>
  <MyBtn id="btn-1" name="btn"></MyBtn>
  <MyBtn id="btn-2" name="btn"></MyBtn>
</template>
<script>
import Card from '@/components/my-components/Card.vue';
export default{
  components:{
    Card,
    'card-service' : Card
  },
  data(){
    return{
    data: [
      {
        title: 'Title 1',
        description: 'Description 1',
        date: '31 Oktober 2023'
      },{
        title: 'Title 2',
        description: 'Description 2',
        date: '8 Februari 2007'
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
    background-color: #1050e8;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
  }
</style>