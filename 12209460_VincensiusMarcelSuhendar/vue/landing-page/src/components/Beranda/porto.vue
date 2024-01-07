<template>
    <div id="porto" class="portfolio">
        <h3>Our Portfolio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quaerat? Voluptatibus reprehenderit iusto repudiandae libero itaque natus eaque labore nobis dolorum nam?</p>
        <div class="row-portfolio">
            <cardport v-for="item in data" :portfolio="item"></cardport>
        </div>
    </div>
</template>
<script>
    import cardport from "@/components/my-components/cardport.vue"
export default{
    components:{
        cardport,
    },
    props:['data']
}
</script>
<style>
    .portfolio{
        margin-top: 80px;
    }
    .portfolio h3{
        margin: auto;
        font-weight: 900;
        font-size: 48px;
        line-height: 78px;
        color: #042181;
        margin-bottom: 15px;
        text-align: center;
    }
    .portfolio p{
        font-weight: 900;
        line-height: 20px;
        color: #4F556A;
        max-width: 680px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
    }

    .portfolio p span{
        color:  gray;
    }
    .row-portfolio{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 10px;
    }
    @media screen and (max-width: 600px){
        .row-portfolio{
            display: grid;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 10px;
        }
    }
</style>