<template>
  <div class="row-service">
    <Card v-for="item in data" :img2="item.img2" :img="item.img" :title="item.title" :description="item.description" :name="item.name" :date="item.date">
    </Card>
  </div>
</template>

<script>
import Card from "@/components/my-components/Card.vue";
export default {
  components: {
    Card,
    'card-service': Card
  },
  data() {
    return {
      data: [{
        img: '/img/gr86.png',
        title: 'GR86',
        description: "Cars such as the Toyota GR86 are few and far between. Sure, there's its mechanical twin, the Subaru BRZ, but overall, there are very few affordable rear-wheel-drive coupes available among the sea of crossovers and SUVs. The GR86 comes with a 228-hp flat-four engine. A six-speed automatic gearbox is available, but you're best off avoiding it and sticking with the car's standard six-speed manual gearbox. This small Toyota two-door's rear seats aren't there for carpooling, but rather add additional cargo space once you've filled up its trunk. The GR86 is fun to drive anywhere thanks to its sharp steering and deft handling. Even better, it's all available at a reasonable price.",
        name: "Daffi Fauzan",
        date: '31 Oktober 2023'
      },
      ]
    }
  },


};
</script>

<style>
.row-service {
  display: grid;
  text-align: right;
  grid-gap: 10px;
}
</style>
