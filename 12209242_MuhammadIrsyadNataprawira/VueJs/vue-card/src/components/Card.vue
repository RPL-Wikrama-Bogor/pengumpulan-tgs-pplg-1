<script setup>
defineProps({
  Title: String,
  Desc: String,
  Author: String,
  Tanggal: String,
  Img: String,
  Profile: String
});
</script>

<template>
  <div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="row d-flex flex-row justify-content-center">
      <div class="row">
        <div class="d-flex flex-column" id="comment-container">
          <div class="bg-white comment-box">
            <div class="flex-row d-flex">
              <img :src="Profile" width="40" class="rounded-circle">
              <div class="d-flex flex-column justify-content-start ml-2">
                <span class="mx-2 d-block font-weight-bold name">{{ Title }}</span>
                <span class="mx-2 text-black">{{ Author }}</span>
              </div>
            </div>
            <div class="mt-3">
              <p class="comment-text">{{ Desc }}</p>
            </div>
          </div>
          <div class="bg-white date-box">
            <div class="d-flex flex-row fs-14">
              <div class="p-2 cursor p-2"><span class="ml-1 text-black-50">{{ Tanggal }}</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>