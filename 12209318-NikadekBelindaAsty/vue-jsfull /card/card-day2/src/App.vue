<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :descriptions="item.descriptions" :name="item.name" :date="item.date" :image="item.image" :profile="item.profile" :arrow="item.arrow"> 
    </Card>
    <!-- <card-service title="ini title2" descriptions="ini deskripsi"></card-service> -->
  </div>
</template>
<script>
import Card from '@/components/Card-components/Card.vue';
export default{
  components: {
    Card,
    'card-service': Card
  },
  data(){
    return{
      data: [
        {
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          descriptions: 'Ever been in a room and felt like something was missing? perhaps it feel slightly bare and uninviting. ive got some simple tips to help you make any room feel complate',
          name: 'Ni Kadek Belinda Asty',
          date: '31 oktober 2023',
          image: 'meja.png',
          profile: 'abby.png',
          arrow: 'arrow.png'
        },
        // {
        //   title: 'ini title 2',
        //   descriptions: 'ini deskripsi',
        //   tanggal: '3 november 2023'
        // }
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
