<template>
  <center>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <div class="image-container">
          <img :src="img" class="img-fluid rounded-start" alt="Card Image">
        </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ title }}</h5>
        <p class="card-text">{{ description }}</p>
        <p class="card-text"><small class="text-body-secondary">{{ name }}</small></p>
        <p class="card-text"><small class="text-body-secondary">{{ date }}</small></p>
      </div>
    </div>
  </div>
</div>
</center>
</template>
<script>
export default {
  props: ['title', 'description','name','date','img']
}
</script>
  
<style scoped>
.card {
  margin-top: 100px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s;
}

.card:hover {
  transform: scale(1.02);
}

.card-title {
  text-align: start;
  font-size: 1.25rem;
  font-weight: bold;
  margin: 0;
}

.card-text {
  text-align: start;
  font-size: 1rem;
  margin: 0;
}

.text-muted {
  color: #888;
}
.image-container {
  width: 100%;
  height: 300px;
  overflow: hidden;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>
