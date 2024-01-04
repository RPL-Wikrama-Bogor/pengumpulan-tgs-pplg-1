<template>
    <div class="portfolio">
        <h3>Portfolio</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row-portfolio">
            <Card></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portfolio/Card.vue';
export default{
    components:{
        Card
    }
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

.portfolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4F556A;
    max-width: 680px;
    margin: auto;
    margin-bottom: 25px;
}

.portfolio p span {
    color: gray;
}

.row-portfolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

</style>