<template>
    <div class="card-service">
        <img :src="img" alt="">
        <div class="text">
        <h1>
            {{ title }}
        </h1>
        <p>{{ description }}</p>
            <!-- <img :src="imgProfile" alt="profile" class="profile">  -->
            <div class="text-profile">
            <h5>{{ name }}</h5>
            <p>{{ date }}</p>
            <slot></slot>
        </div>
    </div>
    </div>
</template>
<script >
export default{
    props: ['img','title', 'description', 'name', 'date', 'imgProfile']
}
</script>
<style scoped>
.text{
    flex-direction: column;
    align-items: center;
    margin-left: 3%;
    width: 400px;
}

.card-service{
    text-align: start;
    min-height: 306px;
    padding: 0px 0px 0px 0px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 15px 15px 15px 15px;
    background: #f3f4f6;
    transition: all 0.5s ease;
    margin: 150px 300px;
    display: flex;
    justify-content: center;
    width: 700px;
    max-width: fit-content;
}
.card-service h1{
    font-size: 23px;
    line-height: 30px;
    color: #343b4e;
}
.card-service p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
}
.card-service img{
    width: 300px;
    height: 300px;
    border-radius: 15px 0 0 15px;
    margin: 0;
    
}
</style>