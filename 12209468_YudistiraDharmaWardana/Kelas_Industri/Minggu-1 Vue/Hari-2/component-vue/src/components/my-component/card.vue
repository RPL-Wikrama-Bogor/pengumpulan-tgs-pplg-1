<template>
    <div class="card-service">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXxglLOv8b13pmRHgIs0hcgZXC8Yy40r1Giw&usqp=CAU" alt="">
        <h4>
            {{ title }}
        </h4>
        <p>{{ description }}</p>

        <slot></slot>
        <button class="btn-service">CSS BIASA </button>
        <!-- <button class="btn-service-global">CSS GLOBAL</button> -->
        <MyBtn></MyBtn>
    </div>
    
</template>

<script>
export default{
    props: ['title', 'description']
}

</script>

<style scoped>

.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #4c55c4;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.card-service{
    text-align: start;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 1);
    border-radius: 60px 0px 0px 0px;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-service h4{
    font-size: 10px;
    line-height: 30px;
    color: #343b4e;
}

.card-service p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 10px 0 0;
}

</style>