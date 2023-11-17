<template>
<p>---------------------templating---------------------</p>
{{ nama }}
{{ number }}
 <div v-html="rombel"></div>
 <p>---------------------data binding---------------------</p>
 <button :disabled="nonaktif">button</button>
 <h1 v-bind="property">Asty</h1>
 <input :type="type">
 <p>---------------------data binding---------------------</p>
 {{ count  + 1 }}
 {{ count == 0 ? count + 1 : count + 2}}
<p>---------------------v-if------------------------------</p>
<button v-if="show">submit</button>

<p>---------------------v-if-else------------------------------</p>

<div v-if="count == 1">
number 1
</div>
<div v-else-if="count == 2">
number 2
</div>
<div v-else>
lebih dari 2
</div>


<p>---------------------computed dan method------------------------------</p>
<button @click="counterNumber">Methods {{ counterb }}</button><br><br>
<button @click="countComputed">computed {{ numberComputed }}</button><br><br>

<input :type="typeInput">
<button @click="showPassword">Show Password</button>
<!-- <button @click="counterNumber">Methods {{ counterb }}</button><br><br>
<button @click="countComputed">computed {{ numberComputed }}</button> -->

<p>---------------------class and style------------------------------</p>
<ul>
  <li class="fs" :class="{active:isActive, fs40px:isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">Ubah Style</button>

<p>---------------------List rendering------------------------------</p>

<ul>
  <li v-for="(item,index) in daftarKelas">{{ index+1 }}{{ item }}</li>
</ul>

<p>---------------------V-model------------------------------</p>
<input type="text" v-model="inputKelas">
{{ inputKelas }}


</template>

<script>
 export default{
  data(){
    return {
      inputKelas: '',
      daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
      counterb: 0,
      numberComputed: 0,
      show : true,
      count: 10,
      nama: 'Asty',
      number: 23, 
      rombel: '<h1>PPLG XI-1</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
    }
  },
  methods: {
    counterNumber(){
      this.counterb += 1;
      // alert(this.counterb)

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
  computed: {
    countComputed(){
      this.numberComputed += 6;

  }
 }
}

</script>

<style>
.color{
color: #f472b6;
}

.fs40px{
  font-size: 40px;
}

.active{
  color: red;
}

</style>