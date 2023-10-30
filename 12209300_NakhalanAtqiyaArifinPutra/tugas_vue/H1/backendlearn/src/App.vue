<template>
  <p>---------data biding---------</p>
{{ nama }}
{{ number }}
<div v-html="kelas"></div>
<button :disabled="nonaktif">button</button>
<h1 v-bind="property">Aji santi</h1>
<input :type="typeInput">
<p>---------data binding---------</p>
{{ count == 0 ? count + 1 : count + 2 }}
<p>---------v-if---------</p>

<button v-if="show">submit</button>
<button v-show="show">submit</button>

<div v-if="count">
 number 1
</div>
<div v-else-if="count == 2">
  number 2
</div>
<div v-else>
  lebih dari 2
</div>
<P>----------computed dan methods----------</P>
<input :type="typeInput">
<button @click="showPassword"> {{ kondisi }} Password</button>

<button @click="counterNumber">Methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button>
<P>----------class dan style-----------</P>
<ul>
  <li class="" :class="{active: isActive,
                        fs40px: isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">Ubah</button>

<p>------Rendering-------</p>
<ul>
  <li v-for="(item,index) in daftarKelas">
    {{ item }}{{  index+1}}</li>
</ul>
<p>------v-models-------</p>
<input type="text" v-model="inputkelas">
{{ inputkelas }}
</template>

<script>
export default {
  data(){
    return{
      inputkelas:'',
      daftarKelas:['RPL ', 'RPL ', 'RPL '],
      kondisi:'show',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count : 1,
      nama: 'Aji',
      number: 1,
      kelas: '<h1>kelas 11</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive:true
    }
  },
  methods: {
  counterNumber(){
    this.counterButton += 1;
  },
  showPassword() {
    if(this.typeInput == 'password') {
      this.typeInput = 'text';
      this.kondisi = 'hide';
    }else{
      this.typeInput = 'password';
    }
  },
  ubahWarna(){
    if(this.isActive == true){
      this.isActive=false;
    }else{
      this.isActive=true;
    }
  },
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
  font-size: 20px;
}
.active{
  color: brown;
}
</style>