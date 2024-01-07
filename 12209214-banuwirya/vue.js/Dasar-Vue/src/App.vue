<template>
  <p>----------------templating----------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Future</h1>
  <input :type="typeinput">
  <p>---------------data binding---------------</p>
  {{ count == 0 ? count + 1 : count + 2}}
  <p>------------------v-if----------------------</p>
 
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
 
  <div v-if="count == 1">
   number 1
  </div>
  <div v-else-if="count == 2">
   number 2
  </div>
  <div v-else>
   lebih dari 2 
  </div>
  <p>-------------computed dan method------------</p>
  <button @click="counterNumber">methods {{ counterButton }}</button>
  <button @click="countComputed">computed {{ numberComputed }}</button>  
  <input :type="typeinput">
  <button @click="showPassword">show password</button>
  <p>------------class and style-------------</p>
 
  <ul>
   <li class="fs" :class="{active:isActive, fs40px:isActive}">
     test
   </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>------------list rendering-------------</p>
  <ul>
  <li v-for="(item, index) in daftarKelas">{{ index+1 }} {{ item }}</li>
  </ul>
  <p>------------v-model-------------</p>
  <input type="text" v-model="Inputkelas">
  {{ Inputkelas }}
 </template>
 
 <script>
 export default{
   data()  {
     return {
      daftarKelas:['RPL 1','RPL 2','RPL 3'],
       numberComputed: 0,
       counterButton: 0,
       show: false,
       count:0,
       nama : 'Ramadhan',
       number : 1,
       kelas : '<h1>kelas 11</h1>',
       nonaktif : true,
       property: {
         id: 1,
         class : 'color'
       },
       typeinput: 'password',
       isActive:true
     }
   },
   methods:{
     counterNumber(){
       this.counterButton += 1 
     },
     showPassword(){
       if(this.typeinput == 'password'){
       this.typeinput = 'text';
       } else {
         this.typeinput = 'password';
       }
     },
     ubahWarna(){
       if(this.isActive){
         this.isActive = false ;
       }else{
         this.isActive=true;
       }
     }
   },
   computed:{
     countComputed(){
       this.numberComputed += 6
     },
     
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