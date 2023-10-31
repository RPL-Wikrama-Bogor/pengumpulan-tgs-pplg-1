<template>
  <div class="card-word">
    <img class="foto" :src="img2" >
    <h1>{{ title }}</h1>
    <p class="deskripsi">{{ deskripsi }}</p>
    <header class="profil-header">
   <img class="profil-gambar" :src="img1"> 
  <div class="profil-info"> 
    <p class="profil-nama">{{ name }}</p> 
    <p class="profil-time">{{ date }}</p>
    <a href="" class="fa fa-mail-forward" style="font-size:36px"></a>
  </div> 
   </header>

  </div>
</template>

<script>
export default{
    props:['img1','img2','img3','title','deskripsi','name','date']
}
</script>
<style>
.card-word{
  margin: auto;
  text-align: start;
    max-width: 800px;
    min-height: 300px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;  
    background-color: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
    margin: auto;
    justify-content: center;
}
.card-word h1{
  font-size: 18px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  line-height: 30px;
  font-family:'Times New Roman', Times, serif;
  color: #7D7C7C;
}

.card-word .foto{
  height: 300px;
  width: 300px;
  float: left;
  margin-right: 30px;
}
.card-word .deskripsi{
  font-family: monospace;
  color:#657786;
}
.profil-header{
  display: flex;
  align-items: center;
  text-align: left;
}
.profil-info{
  margin-left: 20px;

}
.card-word .profil-nama{
  font-size: 16px;
  font-family: monospace;
  margin: 10px 0;
}
.card-word .profil-time{
  color: #a9a9a9;
  font-size: 14px;
}
.card-word .profil-gambar{
  border-radius: 50%;
  height: 50px;
  width: 50px;
}
</style>