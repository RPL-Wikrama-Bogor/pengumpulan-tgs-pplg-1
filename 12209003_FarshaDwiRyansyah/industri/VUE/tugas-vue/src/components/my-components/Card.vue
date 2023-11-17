<template>
    <div class="card-service">
      <div class="d-flex justify-content-sm-center">
        <div class="card mb-3" style="max-width: 840px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="@/assets/img/miles.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ title }}</h5>
        <p class="card-text">{{ description }}</p>
        <img src="@/assets/img/ppp.png" class="img">
        <p class="name">
         <b> {{ name }} </b>
        </p>

        <p class="tanggal">
          {{ tanggal }}
        </p>

        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by
                                 @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons,
                                  Inc. --><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 
                                  1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 
                                  19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
                    </div>

      </div>
    </div>
  </div>
</div>
</div>

        
       
    </div>
</template>

<script>
export default {
    props: ['title', 'description', 'img', 'name', 'tanggal']
}

</script>

<style scoped>

    /* .card-service {
        text-align: center;
        min-height: 150px;
        padding: 10px 10px 0 300px;
        box-shadow: 0px 10px 30px rgba( 0, 0, 0, 0.5);
        border-radius: 5px;
        background: white;
        transition: all 0.5s ease;
        margin: 10px 10px;
    }

    .card-service h1 {
        font-size: 25px;
        line-height: 30px;
    }

    .card-service p {
        font-weight: 400;
        margin: 0 0 10px 0;
    } */

*{
  margin: 0;
  padding: 0;
}

    .card{
      margin-top: 200px;
    }

    .img{
      border-radius: 50%;
      margin-top: 150px;
      display: flex;
      position: relative;
      width: 60px;
      height: 60px;
      margin-left: 20px;
    }
    
    .name{
      margin-left: 90px;
      margin-top: -58px;
      font-size: 19px;
      font-weight: 800;
      font-family:Arial, Helvetica, sans-serif ;
    }

    .tanggal{
      margin-left: 100px;
      margin-top: -5px;
    }

    .card-icon{
    margin-left: 500px;
    margin-top: -30px;
}

.card-icon{
  width: 100px;
  height: auto;
}
</style>