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
   

  </div> 
   </header>
   <a :href="link" target="_blank">
 <img :src="sheare" alt="" class="share">
</a>
  </div>
</template>

<script>
export default{
    props:['img1','img2','img3','title','deskripsi','name','date','link','sheare']
}
</script>
<style lang="css">
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
  white-space:normal;
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
.share{
  float: right;
  margin-right: 40px;
height: 40px;
width: 40px;
border-radius: 100%;
}
.profil-header{
  display: flex;
  align-items: center;
  text-align: left;
  margin-top: 30px;
}
.profil-info{
  margin-left: 20px;

}
.profil-info a{
  width: 20px;
  height: 10px;
}
.card-word .profil-nama{
  font-size: 16px;
  font-family: monospace;
  margin: 10px 0;
}
.card-word .profil-time{
  color: #a9a9a9;
  font-size: 14px;
  font-family:'Times New Roman', Times, serif;
}
.card-word .profil-gambar{
  border-radius: 50%;
  height: 50px;
  width: 50px;
}
</style>