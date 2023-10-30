<template>
    <p>{{ nama }}</p> <br>
    <p>{{ absen }}</p> <br>
    <p>{{  rombel }}</p> <br>
    <p>{{  rayon }}</p> <br>
    <div v-html="kelas"></div><br>
    <button v-if="show" :disabled="nonaktif">Button</button><br>
    <h1 v-bind="property">zae</h1><br>
    <p>=================================</p><br>
    {{ count == 0 ? count + 1 : count + 2 }} <br>
    <p>=================================</p><br>
    <button v-if="show">Submit</button> <br>
  
    <div v-if="count == 1">
      1
    </div>
    <div v-if="count == 2">
      2
    </div>
    <div v-else>
      >2
    </div>
  
    <input :type="typeInput"><br>
    <button @click="showPassword">showPassword</button>
  <p>==========================================</p>
  <button @click="counterNumber">methods {{ counterButton }}</button>
  <button>computed {{ numberComputed }}</button>
  
  <p>===================class and style===========================</p>
  
  <ul>
    <li class="fs" :class="{active:isActive,fs40px:isActive}">
      text
    </li>
  </ul>
  <button @click="ubahWarna">UbahWarna</button>
  
  <ul>
    <li v-for="(item,index) in daftarKelas">{{ item }} index {{ index }}</li>
  </ul>
  
  <!-- v model -->
  
  <input type="text" v-model="kelas">
  {{ kelas }} 
  </template>
  
  
  
  <script>
  export default{
    data(){
      return{
        kelas: '',
        daftarKelas:['RPL 1','RPL 2','RPL 3'],
        counterButton: 1,
        numberComputed: 0,
        count: 1,
        number: 1,
        nama: 'Vincent',
        rombel: 'PPLG XI-1',
        rayon: 'Wikrama 4',
        kelas: '<h1>11</h1>',
        absen: 32,
        nonaktif: true,
        show: true,
        property:{
          id: 1,
          class: 'color'
        },
        typeInput: 'password',
        isActive:true,
      }
    },
    methods:{
      counterNumber(){
        this.counterButton += 1;
      },
      showPassword(){
        if (this.typeInput == 'password'){
          this.typeInput = 'text'
        } else{
          this.typeInput = 'password';
        }
      },
      ubahWarna(){
        if(this.isActive){
          this.isActive=false;
        } else {
          this.isActive=true;
        }
      },
    },
      computed:{
        countComputed(){
          this.numberComputed += 6;
        }
    },
  }
  </script>
  
  <style>
  .color{
    color: red;
  }
  .active{
    color: aqua;
  }
  .fs40px{
    font-size: 40px;
  }
  </style>
  