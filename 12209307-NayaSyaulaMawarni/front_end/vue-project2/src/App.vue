<template>
  <div class="row-service">
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :title="item.title" :description="item.description" :name="item.name" :date="item.date" :image="item.image">
  <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  </Card>
  </div>
</template>

<script> 
// panggil file
import Card from '@/components/Card.vue';
export default {
  // components apa saja yang akan ditampilkan
  components: {
    // definisi componen agar bisa digunakan di template
    Card, 
  },
  // penyimpanan variable
  data() {
    return {
    CardContents: [{
      title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
      description: 'Ever been in aroom and felt slighty bare and uninviting. Ive got some simple tips to help you make any room feel complete.',
      name: 'Naya Syaula Mawarni',
      date: '31 Oct 2023',
      image: 'two.png'
    }
  ]
  }
} 
}
</script>

<style>

</style>