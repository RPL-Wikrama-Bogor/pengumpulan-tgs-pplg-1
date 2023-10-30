<template>
  <p>----------------------------templating------------------------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>----------------------------data blanding------------------------------</p>
  <button v-if="show" :disabled="nonatif">button</button>
  <h1 v-bind="property">dimss</h1>
  <input :type="typeInput">
  <p>----------------------------data blanding------------------------------</p>
  {{ count + 1 }}
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-------------------------------v-if------------------------------------</p>

  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>-----------------------computed dan methods------------------------------</p>
    <button @click="counterNumber">Methods {{ counterButton }}</button>
    <br>
    <br>
    <button @click="countComputed">Computed {{ numberComputed }}</button>
    <input :type="typeInput">
    <button @click="showPassword">Show Password</button>
    
    <p>-----------------------class dan style------------------------------</p>
    <ul>
      <li :class="{active:isActive, fs40px:isActive}">
        test
      </li>
    </ul>    
    <button @click="ubahWarna">Ubah Style</button>
    <p>-----------------------list rendering------------------------------</p>
    <ul>
      <li v-for="(item, index) in dataRombel">{{ index+1 }} {{ item }}</li>
    </ul>
    
    <p>-----------------------v-model------------------------------</p>
    <input type="text" v-model="inputrombel">{{ inputrombel }}

  </template>

<script>
export default{
  data(){
    return {
      inputrombel: '',
      dataRombel: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count : 3,
      nama : 'Ayestha',
      number : 9,
      kelas : '<h1>Kelas XI</h1>',
      nonatif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true,
    }
  },
  methods: {
    counterNumber(){
      // alert(this.counterButton)
      // kalau buttonnya dipencet angkanya nambah
      this.counterButton += 1;
    },
    showPassword(){
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
      }else{
        this.typeInput == 'password';
      }
    },
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
  },
  computed:{
    countComputed(){
      this.numberComputed += 6;
    }
  }
}
</script>

<style>
  .color{
    color: red;
  }
  .fs40px{
    font-size: 40px;
  }
  .active{
    color: blue;
  }
  </style>