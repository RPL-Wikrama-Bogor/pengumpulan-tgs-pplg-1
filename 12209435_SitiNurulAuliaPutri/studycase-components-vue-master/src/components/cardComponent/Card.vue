<template>
  <div class="card-service">
    <center>
    <img class="img" :src="img" alt="Card Image" />
    </center>
    <h1>{{ title }}</h1> 
    <p>{{ content }}</p> 
    <p>By: {{ nama }}</p> 
    <p>Year Aired: {{ tgl }}</p>
  </div>
</template>
  
<script>
export default {
  props: {
    title: String,
    content: String,
    img: String,
    nama: String,
    tgl: String,
  },
};
</script>

<style lang="css">
.card-service {
  display: flex;
  flex-direction: column;
  background-color: #f2f2f2;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-service h1 {
  font-size: 24px;
  margin: 0;
}

.card-service p {
  font-size: 16px;
}

.img {
  width: 230px;
  margin-bottom: 20px;
}
</style>