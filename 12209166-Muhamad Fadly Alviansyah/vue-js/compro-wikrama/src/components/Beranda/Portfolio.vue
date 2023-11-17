<template>
  <div class="portfolio">
    <h3>Portfolio Kami</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis soluta sint repudiandae molestiae laboriosam est voluptate vitae hic molestias!</p>
    <div class="row-portfolio">
      <Card v-for="item in data" :portfolio="item"></Card>
    </div>
  </div>
</template>
<script>
import Card from '@/components/Portfolio/Card.vue'
export default {
  components: {
    Card,
  },
  props: ['data']
}
</script>
<style>
.portfolio {
  margin-top: 80px;
}

.portfolio h3 {
  margin: auto;
  font-family: 'Raleway', sans-serif;
  font-weight: 900;
  font-size: 48px;
  line-height: 70px;
  color: #042181;
  margin-bottom: 15px;
  text-align: center;
}

.portfolio p{
  font-weight: 900;
  font-size: 14px;
  line-height: 20px;
  color: #4f556a;
  max-width: 680px;
  margin: auto;
  margin-top: 14px;
  margin-bottom: 25px;
  text-align: center;
}

.portfolio p span {
  color: gray;
}

.row-portfolio {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

@media screen and (max-width: 600px) {
  .row-portfolio {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
  }
}
</style>