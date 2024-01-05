<template>
    <div class="card-service">
        <img :src="image" alt="service">
        <div class="card-service-right">
            <h1>
                {{ title }}
            </h1>
            <p>
                {{ descriptions }}
            </p>
            <img :src="profile" alt="profile">
            <div class="name-service">
                <h4>
                    {{  name }}
                </h4>
                <p>
                    {{  date }}
                </p>
            </div>
            <div class="arrow-service" alt="arrow">
                <img :src="arrow" alt="profile">
            </div>
        </div>
        <slot></slot>
    </div>
    </template>

<script>
import Card from '@/components/Card-components/Card.vue';
export default {
    props: ['title', 'descriptions', 'name', 'date', 'image', 'profile', 'arrow']
}
</script>

<style scoped>
.card-service .card-service-right img{
    height: 35px;
    width: 40px;
    border-radius: 20px;
    margin-top: 22px;
}

.name-service{
    float: right;
    margin-right: 170px;
    margin-top: 17px;
}

.arrow-service img{
    float: left;
    margin-left: 400px;
    width: 50px;
    height: 30px;

}
.name-service h4{
    font-weight: bold;
}
.card-service-right{
    width: 400px;
    float: right;
}
.card-service {
    display: flex;
    align-items: center; 
    min-height: 30px;
    width: 800px;
    height: 350px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 15px;
    background: #fff7ed;
    transition: all 0.5s ease;
    margin: 20px 250px;
  }
  .card-service img {
    width: 300px;
    height: 350px;
    border-radius: 10px 0 0 10px;
    margin-right: 25px;
  }
  
  .card-service h1 {
    font-size: 18px;
    line-height: 20px;
    color: #343b4e;
    width: 300px;
    padding-bottom: 10px;
    font-weight: bold;

  }
  
  .card-service p {
    text-align: left;
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
