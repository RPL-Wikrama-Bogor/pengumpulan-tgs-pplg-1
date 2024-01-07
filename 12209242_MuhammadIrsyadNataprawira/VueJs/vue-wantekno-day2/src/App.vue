<script setup>
import Card from './components/Card.vue';

const data = [
    {
        title: 'Title 1',
        desc: 'This is a first description',
        date: '21 November 2010'
      },
      {
        title: 'Title 2',
        desc: 'This is a second description',
        date: '31 November 2010'
      },
    {
        title: 'Title 3',
        desc: 'This is a third description',
        date: '10 November 2010'
    },
    {
        title: 'Title 4',
        desc: 'This is a fourth description',
        date: '28 Oktober 2023'
    },
]
</script>

<template>
  <div class="grid-row-2">
    <Card v-for="_ in data" :title="_.title" :desc="_.desc">
      <p>{{ _.date }}</p>
    </Card>
  </div>
</template>

<style scoped>

</style>
