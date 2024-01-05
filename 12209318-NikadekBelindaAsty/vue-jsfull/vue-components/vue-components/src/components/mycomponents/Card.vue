<template>
    <div class="card-service">
        <img src="@/assets/img/layanan.png" alt="service">
        <div>
            <h4> 
                {{ title }}
            </h4>
        </div>
        <p>
            {{  descriptions }}
        </p>
        <slot></slot>
        <button class="btn-service">Detail</button>
        <!-- <MyBtn>Detail</MyBtn> -->
        <MyBtn id="btn-1" name="btn">ini components global</MyBtn>
    </div>
</template>

<script>
import Card from '@/components/mycomponents/Card.vue';
export default {
    props: ['title', 'descriptions']
}
</script>

<style scoped>
.card-service {
    text-align: start;
    min-height: 306px;
    padding: 30px 30px 0px 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 60px 0px 0px 0px;
    background: #fff7ed;
    transition: all 0.5s ease;
    margin: 10px 10px;

}

.card-service h4{
    font-size: 18px;
    line-height: 30px;
    color: #343b4e;
}

.card-service p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
}

.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400px;
    color: white;
    background-color: #fda4af;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;

}
</style>