<template> 

  <p>----------------templating-------------</p>
   <p>{{ nama }}</p>
   <p>{{ number }}</p>
  <div v-html="umur"></div>
  <p>----------------data binding-----------</p>
  
  
  {{ count == 0 ? count = 1 : count +2}}
  <P>------------------V-IF-------------------</P>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
  
  <div v-if="count == 2">
   number 2
  </div>
   <div v-else="count">
    lebih dari 3
  </div>
  
  <p>------------------Computed And Method-------------------</p>
  
  <button @click="counterNumber">{{ counterButton }}</button>
  <button @click="countComputed">Computed{{ numberComputed }}</button>
  <br>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  
  <p>----------------------class and style--------------------------</p>
  <ul>
    <li class="fs" :class="{
      active:isActive,
      fs40px:isActive
    }">
      test
    </li>
  
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>---------list rendering--------</p>
  <ul>
    <li v-for="(item, index) in daftarkelas">{{ index+1 }} {{ item }}</li>
  </ul>
  <p>----------------------model--------------------------</p>
  <input type="text" v-model="inputkelas">
  {{ inputkelas }}
  
  </template>
  
  <script>
  export default{
    data(){
      return{
        inputkelas: ' ',
        daftarkelas: ['PPLGXI-1','PPLGXI-2','PPLGXI-3'],
        typeInput: 'password',
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 5,
        nama:'babayo',
        number:'1',
        umur:'<h1>Kelas</h1>',
        nonaktif:false,
        property: {
          id:1,
          class: 'color'
        },
        type: 'password',
        isActive: true
        
      }
  
    },
    methods: {
      counterNumber(){
        this.counterButton ++ //+= 1;
      },
      showPassword(){
       if(this.typeInput=='password'){
        this.typeInput = 'text';
       } else{
        this.typeInput = 'password'; 
       }
      },
      ubahWarna(){  
      if(this.isActive == true){
        this.isActive = false;
      }
        else {
          this.isActive = true;
        }
      }
    },
    computed: {
        countComputed(){
          this.numberComputed += 6;
        }
  
     }
  
  }
  
  </script>
  <style>
    .color {
      color:red;
    }
  
    .fs40px{
      font-size: 50px;
    }
  
    .active {
      color: blue;
  
    }
  
  
  
  </style>