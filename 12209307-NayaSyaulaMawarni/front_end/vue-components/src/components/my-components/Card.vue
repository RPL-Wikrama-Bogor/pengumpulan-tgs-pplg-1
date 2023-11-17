<template>
    <div class="card-service">
        <h4>
            {{ title }}
            <!-- User-Friendly Behaviour For Business mind people -->
        </h4>
        <p>{{ description }}
            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. -->
        </p>
        <slot></slot>
        <button class="btn-service">Detail</button>
        <!-- <button class="btn-service-global">Detail</button>
        <MyBtn></MyBtn> -->
    </div>
</template>
<script>
    export default {
        props: ['title', 'description']
    }
</script>
<style scoped>
.btn-service {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: brown;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

.card-service {
    text-align: start;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 60px 0px 0px 0px;
    background: cornsilk;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-service h4 {
    font-size: 18px;
    line-height: 30px;
    color: #343b4e;
}
</style>