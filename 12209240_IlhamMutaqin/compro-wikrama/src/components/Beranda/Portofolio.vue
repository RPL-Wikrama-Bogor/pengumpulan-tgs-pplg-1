<template>
    <div class="portofolio">
        <h3>Portofolio Kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident adipisci quae eveniet officiis, rem
            blanditiis.</p>
        <div class="row-portofolio">
            <Card></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portofolio/Card.vue';
export default {
    components: {
        Card
    }
}
</script>
<style>
.portofolio{
    margin-top: 80px;
}

.portofolio h3{
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 18px;
    text-align: center;
}
.portofolio p{
  font-weight: 900;
  font-size: 14px;
  line-height: 14px;
  color: #4f556A;
  max-width: 680px;
  margin: auto;
  margin-top: 14px;
  margin-bottom: 25px;  
}
.portofolio span{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
}

.row-portofolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px){
    .row-portofolio{
        grid-template-columns: repeat(1, 1fr);
    }
}
</style>