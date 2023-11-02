<template>
  <div class="card border-0" style="max-width: 700px;">
    <div class="row g-0">
      <div class="card-image col-md-4">
        <img :src="'/src/assets/img/'+image" class="img-fluid rounded-start">
      </div>
      <div class="col-md-8">
        <div class="card-body p-4">
          <h5 class="card-title">{{ title }}</h5>
          <p class="card-text">{{ description }}</p>
          <div class="profile-parent d-flex justify-content-between">
            <div class="profile-child d-flex">
              <img :src="'/src/assets/profile-picture/' + avatar" class="rounded-circle" alt="">
              <div class="profile-details ms-2">
                <p class="card-text m-0 fw-semibold">{{ name }}</p>
                <p class="card-text fw-normal"><small class="text-body-secondary">{{ date }}</small></p>
              </div>
            </div>
            <div class="profile-child rounded-circle">
              <img src="@/assets/share.svg" class="icons rounded-circle p-2" style="filter: invert(50%) sepia(88%) saturate(85%) hue-rotate(169deg) brightness(88%) contrast(93%);" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['image', 'title', 'description', 'avatar', 'name', 'date']
}
</script>

<style scoped>
.card-image img{
  height: 100%;
}

.card .profile-child:nth-child(1) img{
  width: 45px;
  height: 45px;
  object-fit: cover;
  object-position: center center;
}

.profile-child:nth-child(2){
  background: aliceblue;
  width: 40px;
  height: 40px;
}

</style>