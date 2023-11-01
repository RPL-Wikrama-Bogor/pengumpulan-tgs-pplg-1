<template>
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.text" :image="item.image">
    <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  </Card>
</template>

<script>
// panggil file
import Card from "@/components/Card.vue";
export default {
  // components apa saja yanf akan ditampilkan
  components: {
    // definisi componen agar bisa digunakan di template
    Card,
  },
  // penyimpanan variable
  data() {
    return {
      CardContents: [
        {
          title: "Nama Member : Ibrahim Meilandri Tampan",
          text: `<ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur doloremque nihil iure obcaecati voluptas debitis reprehenderit temporibus nulla porro molestias neque nam, aut ea non eaque facilis quia nobis blanditiis.</li>
                
            </ul>`,
          image: "pp.jpg",
        },
      ],
    };
  },
};
</script>

<style></style>
