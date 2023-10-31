<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :deskripsi="item.deskripsi">
      <p>{{item.date}}</p>
    </Card>
 
</div>
<button class="btn-service-global">Detail</button>
<MyBtn id="btn 1" name="btn"></MyBtn>
</template> 
<script>
  import Card from '@/components/my-components/card.vue';
export default{
  components:{
    Card,
    'card-service' : Card
  },
  data() {
    return {
      data:[
        {
          title: 'title 1',
          deskripsi: 'deskripsi 1',
          date:'31 Oktober'
        },{
          title: 'title 1',
          deskripsi: 'deskripsi 1',
          date: '21 Mei'
        }

      ]
    }
  },
}
</script>
<style>
.row-service{
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10x;
}
.btn-service-global{
  margin-top: 10px;
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color: red;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>
