<template>
    <div class="service">
        <h3>Layanan kami</h3>
        <div class="row-service">
            <Card v-for="item in DataLayanan" :layanan="item"></Card>
        </div>
    </div>
</template>

<script>
import Card from '@/components/Service/Card.vue';
import { Get } from '@/Api/index.js';
export default {
    components: {
        Card
    },
    data(){
        return{
            DataLayanan: []
        }
    },
    async mounted(){
        const response = await Get('services');
        this.DataLayanan = response.data.data;

    }
}
</script>

