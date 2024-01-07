<template>
    <div class="card-service">
        <h1>
            {{ title }}
        </h1>

        <p>{{ description }}</p>

        <slot></slot>
        <button class="btn-service">Detail</button>
        <MyBtn></MyBtn>
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
    background-color: #db1f1f;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

.card-service {
    text-align: start;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
    border-radius: 60px 0px 0px 0px;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-service h4 {
    font-size: 10px;
    line-height: 30px;
    color: lightcoral;
}   

.card-service p {
    font-weight: 400;
    color: red;
    margin: 0 0 10px 0;
}
</style>