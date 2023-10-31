<template>
  <div class="card-service">
    <img :src="img">
    <div class="card-position">
     <h4>
      {{ title }}
    </h4>
    <h4>{{ description }}</h4>
    <p>{{ name }}</p>
    <p>{{ date }}</p> 
    </div>
    
  </div>

  
</template>
<script>
export default {
  props: ['title', 'description','name','date','img']
}
</script>
  
<style scoped>
.card-service {
  text-align: start;
  min-height: 306px;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
  background: white;
  transition: all 0.05s ease;
  margin: auto 0px;
}

.card-service img {
  width: 530px;
  position: absolute;
  
}

.card-service h4 {
  text-align: start;
  font-size: 18px;
  line-height: 30px;
  color: #343b4e;
}

.card-service p {
  font-weight: 400;
  color: #827f8d;
  margin: 0 0 10px 0;
}
.card-position {
  margin-left: 570px;
}

</style>