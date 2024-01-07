<template>
    <div class="section_2">
        <h3>Layanan kami</h3>
        <div class="row-service">
            <CardLayanan v-for="item in data" :layanan="item"></CardLayanan>
            <CardLayanan v-for="item in data" :layanan="item"></CardLayanan>
            <CardLayanan v-for="item in data" :layanan="item"></CardLayanan>
        </div>
    </div>
</template>
<script>
import '@/assets/layanan.css';
import CardLayanan from '@/components/Layanan/CardLayanan.vue';
export default {
    components: {
        CardLayanan
    },
    props: ['data']
}
</script>