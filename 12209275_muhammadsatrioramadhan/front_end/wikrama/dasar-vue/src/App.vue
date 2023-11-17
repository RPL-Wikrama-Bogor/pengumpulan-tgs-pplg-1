<template>
  
  <p>-----------------------Templating-------------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>----------------------Data binding--------------------|</p>
  <button :disabled="nonaktif">button</button>
  <h1  v-bind="property">rio</h1>
  <input :type="typeInput">
  <p>|----------------------Data binding----------------------|</p>
  <!-- {{ count + 1 }} -->
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>|----------------------v-if--------------------|</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
  
  <div v-if="count == 1">
  Number 1 
  </div>
  
  <div v-else-if="count == 2">
  Number 2
  </div>
  
  <div v-else>
    lebih dari 2
  </div>
  <p>|----------------------Computed and Methods--------------------|</p>
  <input :type="typeInput">
  <button @click="showPassword">show Password</button>
  
  <button @click="counterNumber">Methods {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <p>|----------------------Class--------------------|</p>
  <ul>
    <li :class="{
      active:isActive,
      fs:isActive
      }">
      test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah</button>
  <p>|----------------------bit Rendering--------------------|</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">
      {{ item }} {{ index+1 }}
    </li>
    </ul>
  <p>|----------------------v-model--------------------|</p>
  <input type="text" v-model="Inputkelas">
  {{ Inputkelas }}
  </template>
  
  <script>
  export default{
    data() {
      return {
        Inputkelas: '',
        daftarKelas: ['PPLG ', 'PPLG ', 'PPLG '],
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 1,
        nama:'asep',
        number: 1,
        kelas:'<h1>Kelas 11</h1>',
        nonaktif: false,
        property:{
          id: 1,
          class:'color'
        },
        typeInput:'password',
        isActive: false,
      }
    },
    methods:{
      counterNumber(){
        this.counterButton += 1;
      },
      showPassword(){
        if (this.typeInput == 'password') {
          this.typeInput = 'text';
        }else{
          this.typeInput = 'password'
        }
      },
      ubahWarna(){
        if (this.isActive == true) {
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
  
  .fs{
    font-size: 40px;
  }
  
  .active{
    color: blue;
    font-family: 'Courier New', Courier, monospace;
    font-size: 30px;
  }
  </style>