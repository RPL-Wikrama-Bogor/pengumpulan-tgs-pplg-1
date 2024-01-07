<template>
    <div class="portfolio">
        <h3>Portfolio kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem alias ducimus deleniti laborum architecto sunt beatae, corporis adipisci nemo sed vitae, consectetur, expedita reprehenderit porro placeat cumque voluptates corrupti voluptatem?</p>
        <div class="row-portfolio">
            <Card></Card>
            <Card></Card>
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
.portfolio{
    margin-top: 80px;
}

.portfolio h3{
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
    color: #4f5564;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
}

.portfolio p span{
    color: gray;
}

.row-portfolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px) {
    .row-portfolio{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>