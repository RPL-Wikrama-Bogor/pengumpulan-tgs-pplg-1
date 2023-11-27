<template>
  <div class="row-service">
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.desc" :image="item.image">
  <!-- Code yang berada dibagian tengah merupakan component yang akan masuk ke bagian slot -->
  </Card>
  </div>
</template>

<script> 
// panggil file
import Card from '@/components/Card.vue';
export default {
  // components-components yang akan ditampilkan
  components: {
    // mendefinisikan componen agar dapat digunakan di template
    Card, 
  },
  // menyimpan variable
  data() {
    return {
    CardContents: [{
      image: 'Bakugo.png',
      title: 'Nama Siswa :',
      desc: '',
    }
  ]
  }
} 
}
</script>

<style>

</style>