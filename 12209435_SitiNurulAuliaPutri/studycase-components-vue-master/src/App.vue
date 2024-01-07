<template>
  <div>
    <div class="row-service">
      <Card v-for="dataItem in data" :title="dataItem.title" :content="dataItem.content" :img="dataItem.img" :nama="dataItem.nama" :tgl="dataItem.tgl" />
    </div>
  </div>
</template>

<script>
import Card from './components/cardComponent/Card.vue';

export default {
  components: {
    Card,
  },
  data() {
    return {
      data: [
        {
          title: 'Soft & Wet',
          content: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam sint dignissimos provident voluptatum possimus modi sed incidunt iusto veniam, optio eligendi consequuntur dolorem esse corrupti.',
          img: '../public/sw3.webp',
          nama: 'Prince',
          tgl: '1978'
        },
        {
          title: 'Killer Queen',
          content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quaerat deleniti mollitia excepturi aperiam iste! Nulla quibusdam possimus sequi aperiam.',
          img: '../public/kq.webp',
          nama: 'Queen',
          tgl: '1974'
        },
        {
          title: 'Purple Haze',
          content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ratione tenetur facere delectus autem, cupiditate numquam voluptatem corporis nobis nihil quis voluptate odit minus laboriosam.',
          img: '../public/ph.webp',
          nama: 'Jimi Hendrix',
          tgl: '1967'
        },
      ],
    };
  },
};
</script>


<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 60px;
}
</style>

