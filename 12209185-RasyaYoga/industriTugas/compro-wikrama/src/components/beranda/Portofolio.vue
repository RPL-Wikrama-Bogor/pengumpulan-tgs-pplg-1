<template>
    <div class="portfolio">
        <h3>Portofolio</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, maiores!</p>
        <div class="row-portofolio">
            <Card v-for="item in data" :portfolio="item"></Card>
            <Card v-for="item in data" :portfolio="item"></Card>
        </div>
    </div>
</template>

<script>
import Card from '@/components/portofolio/Card.vue';
export default {
    components: {
        Card, 
    },
    props: ['data']
}
</script>

<style scoped>
.portofolio {
    margin-top: 80px;
}
.portofolio h3 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: cornflowerblue;
    margin-bottom: 15px;
    text-align: center;
}

.portofolio p {
    font-weight: 900;
    font-size: 15px;
    line-height: 20px;
    color:silver;
    max-width: 680px;
    text-align: center;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
}

.portofolio p span {
    color: grey;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}


@media screen and (max-width: 600px) {
    .row-portofolio {
        display: flex;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 10px;
    }
}
</style>