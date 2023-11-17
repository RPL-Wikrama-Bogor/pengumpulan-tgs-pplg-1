<template>
  <div class="row-service">
    <Card v-for="item in data"  :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
    <!-- <card-service title="title 2" description="description 2"></card-service> -->
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn id="btn-1" name="btn"></MyBtn>
</template>

<script>
  import Card from '@/components/my_components/Card.vue';
  export default{
    components:{
      Card, 
      'card-service' : Card
    },
    data(){
      return {
        data: [
          {
            title: 'title 1',
            description: 'description 1',
            date: '31 oktober'
          },
          {
            title: 'title 2',
            description: 'description 2',
            date: '1 november'
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
  .btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400px;
    color: white;
    background-color: #CD5C08;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
  }
  .button-service-global{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #CD5C08;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
  }
</style>
