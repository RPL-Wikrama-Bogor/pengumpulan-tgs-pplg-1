<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :descriptions="item.descriptions">
      <p>{{ item.tanggal}}</p>
    </Card>
    <!-- <card-service title="ini title2" descriptions="ini deskripsi"></card-service> -->
  </div>
</template>
<script>
import Card from '@/components/mycomponents/Card.vue';
export default{
  components: {
    Card,
    'card-service': Card
  },
  data(){
    return{
      data: [
        {
          title: 'ini title 1',
          descriptions: 'ini deskripsi',
          tanggal: '31 oktober 2023'
        },
        {
          title: 'ini title 2',
          descriptions: 'ini deskripsi',
          tanggal: '3 november 2023'
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

.button-service-global{
  margin-top: 10px;
    font-size: 16px;
    font-weight: 400px;
    color: white;
    background-color: #bae6fd;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>