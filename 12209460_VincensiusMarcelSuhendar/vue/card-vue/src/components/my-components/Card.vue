<template>
<div class="position-absolute top-50 start-50 translate-middle card border-light mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img :src="img" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ title }}</h5>
        <p class="card-text text-dark-emphasis">{{ desc }}</p>
        <div class="col-md-4">
            <div class="col-md-4 img float-start">
                <img :src="pfp" class="img-fluid rounded-circle" alt="...">
                <p class="card-text name"><small class="fw-medium">{{ nama }}</small></p>
                <p class="card-text desc"><small class="text-secondary">{{ tanggal }}</small></p>
            </div>
            <div class="col-md-4 float-start">
                <button type="button" class="btn butn rounded-circle"><a href="https://vinms.my.id/"><img :src="btn"></a></button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>  
</template> 
<script lang="ts">
export default {
    props: ['title','desc','img','pfp','nama','tanggal','btn'],
}
</script>
<style scoped>
    .card img{
        height: 100%;
    }
    .img{
        margin-top: 5px;
    }
    .name{
        margin: -40px 0 0 45px;
        width: 7rem;
    }
    .desc{
        width: 7rem;
        margin: -5px 0 1rem 45px;
    }
    .butn{
        background-color: #EEF3F8;
        width: 38px;
        height: 35px;
        margin:  7px 0 0 16rem; 
    }
    .butn img{
        scale: 150%;
        padding-bottom: 5px;
    }
</style>