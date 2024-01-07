<template>
<div class="row-service">
  <card v-for="item in data" :title="item.title" :description=" item.description"> <p> {{ item.date }}</p></card>
 <!-- <card-service title="title 2" description="description 2"></card-service>-->
</div>
<MyBtn id="btn-1" name="btn"></MyBtn>
<MyBtn id="btn-2" name="btn"></MyBtn>
</template>
<script>
import Card from '@/components/my-components/card.vue';
export default {
  components: {
    Card, 
    'card-service': Card
  },
  data(){
    return {
      data: [
        {
          title: 'title 1',
          description: 'description 2', 
          date: '31 Oktober'
        },{
          title: 'title 1',
          description: 'description 2',
          date: '1 November'
        }
        
      ]
      
    }
  }
}
</script>
<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
.btn-service-global{
  margin-top: 15px;
  font-size: 16px;
  font-weight: 400;
  color: #F7E8F6;
  background-color: #937DC2;
  padding: 15px 20px;
  border:none;
  border-radius: 5px;
}
</style>
