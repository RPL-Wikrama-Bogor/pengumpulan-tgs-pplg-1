<template>
    <div class="card-portofolio">
        <img :src="portfolio.file" :alt="portfolio.title">
        <div class="card-portofolio-description">
            <h4>
                {{ portfolio.title }}
            </h4>
            <p><span>Klient :</span> {{ portfolio.name }}</p>
        </div>
    </div>
</template>
<script>
export default {
    props: ['portfolio']
}
</script>
<style scoped>
.card-portofolio {
    text-align: start;
    min-height: 306px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.4);
    border-radius: 60px 0px 0px 0px;
    background-color: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}
.card-portofolio img {
    max-width: 100%;
    height: auto;
}
.card-portofolio-description {
    padding: 0 20px 20px 20px;
}
.card-portofolio h4 {
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 0;
    font-weight: 900;
    line-height: 35px;
    color:cornflowerblue;
}
.card-portofolio p {
    font-weight: 400;
    color: dimgray;
    margin: 0 0 10px 0;
}
</style>