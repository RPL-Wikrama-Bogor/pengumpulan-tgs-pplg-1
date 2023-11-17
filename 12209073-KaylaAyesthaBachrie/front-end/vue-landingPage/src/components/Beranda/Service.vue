<template>
        <div class="service">
            <h3>Layanan Kami</h3>
            <div class="row-service">
                <Card v-for="item in data" :service="item"></Card>
            </div>
        </div>
</template>
<script >
    import Card from '../Service/Card.vue';
    export default{
        components: {
            Card
        },
        props: ['data']
    }
</script>
<style scoped>
    .service{
        margin-top: 80px;
    }

</style>