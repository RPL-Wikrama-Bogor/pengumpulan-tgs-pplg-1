<template>

<div class="portofolio">
    <h3>portofolio kami</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi quaerat dolore eos iusto accusantium nulla reiciendis, vero cupiditate ut odit ea voluptates sint necessitatibus voluptatum corrupti magnam quos nihil.</p>
    <div class="row-portofolio">
        <Card></Card>
        <Card></Card>
        <Card></Card>
    </div>
</div>
    
</template>

<script>

import Card from '@/components/Portofolio/Card.vue';

export default{
    components:{
        Card
    }
}

</script>

<style>

.portofolio {
    margin-top: 80px;
}

.portofolio h3 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
}

.portofolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4F556A;
    max-width: 680px;
    margin: auto;
    margin-bottom: 25px;
}

.portofolio p span {
    color: gray;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

</style>