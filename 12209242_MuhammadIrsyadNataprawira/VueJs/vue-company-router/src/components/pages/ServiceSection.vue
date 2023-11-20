<script setup>
import Card from '../utils/Card.vue';

</script>

<template>
    <div class="section_2">
        <h3>Layanan Kami</h3>
        <div class="row-service">
            <Card />
        </div>
    </div>
</template>

<style scoped>
.section_2 {
    margin-top: 80px;
}

.section_2 h3 {
    font-weight: 900;
    font-size: 48px;
    line-height: 35px;
    color: #042181;
    margin-bottom: 30px;
    text-align: center;
}

.row-service {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px) {
    .row-service {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>