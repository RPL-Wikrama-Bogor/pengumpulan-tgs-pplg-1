<template>
    <div class="card-service">
        <img :src="img" alt="service">
        <div class="card-service-right">
            <h4>
                {{ title }}
            </h4>
            <p>{{ description }}</p>
            <img :src="img" alt="service">
            <div class="name-service">
                <h5>{{ name }}</h5>
                <p>{{ date }}</p>
            </div>
        </div>
    </div>

</template>

<script>
export default{
    props: ['title', 'description', 'name', 'date', 'img']
}
</script>

<style scoped>
    .card-service img{
        height: 250px;
        padding: 0;
        border-radius: 10px 0px 0px 10px;
    }
    .card-service {
        display: flex;
        align-items: center;
        text-align: left;
        min-height: 20px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0, 05);
        border-radius: 10px 10px 10px 10px;
        background: #FCF5ED;
        transition: all 0.5s ease;
        margin: 50px 250px;
        width: 700px;
        font-family: 'Poppins', sans-serif;
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
    
    .card-service-right{
        float: right;
        width: 500px;
        padding: 30px;
        font-size: 10px;
    }
    .card-service-right img{
        height: 40px;
        border-radius: 100%;
    }
    .name-service{
        float: right;
    }
</style>