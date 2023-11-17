<template>
    <div>
        <div class="section_1">
            <div class="section1_content">
                <h1>{{ data.title }}</h1>
                <p>{{ data.description }}</p>
            </div>
            <div class="section1_img">
                <img :src="data.file" :alt="data.title">
            </div>
        </div>
    </div>
</template>

<script>
export default {
  props: ['data']
}
</script>

<style scoped>
.section_1 {
  padding: 20px 0;
  display: flex;
  align-items: center;
}

.section1_content {
  width: 50%;
  padding: 30px 0;
  
  }
  .section1_img {
    width: 45%;
    
  }
  .section1_img img {
    width: auto;
    
  }
  .section1_content h1 {
    font-size: 48px;
    color: cornflowerblue;
    margin-left: -3rem;
    margin-right: -3rem;
  }
  .section1_content p {
    margin-bottom: 20px;
    margin-left: -3rem;
  }
   @media screen and (max-width: 600px) {
    .section_1 {
      flex-direction: column;
      padding: 20px 20px;
    }
    .section1_content{
      width: 100%;
      padding: 30px 0;
    }
    .section1_img {
      width: 100%;
      
    }
   }
</style>