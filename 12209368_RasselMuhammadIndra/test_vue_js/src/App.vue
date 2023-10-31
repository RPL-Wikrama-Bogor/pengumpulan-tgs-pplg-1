<template>
  <p>----------template----------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <button :disabled="nonaktif">klik jika lelah</button>
  <h1 v-bind="property">remiiiiii</h1>
  <input :type="typeInput">
  <p>----------data binding----------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>----------v-if----------</p>


<button v-if="show">submit</button>
<button v-show="show">submit</button>

<div v-if="count ==1">
number 1
</div>
<div v-else-if="count ==2">
number 2
</div>
<div v-else>
  lebih dari 2
</div>

<p>----------computed dan methods----------</p>
<input :type="typeInput">
<button @click="showPassword">Show password</button>
<br>
<br>
<br>
<button @click="counterNumber">Methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button>

<p>----------class dan style----------</p>
<ul>
  <li :class="{active:isActive, fs40px: isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>
<p>----------list rendering----------</p>
<ul>
  <li v-for="(item,index) in daftarKelas">{{ index+1 }}{{ item }}</li>
</ul>
<p>----------v-model----------</p>
<input type="text" v-model="Inputkelas">
{{ Inputkelas }}
</template>

<script>
export default{
  data(){
    return{
      Inputkelas:'',
      daftarKelas:['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput: 'password',
      counterButton : 0,  
      show: true,
      count: 1,
      nama: 'HARI INI USAI' ,
      number: 1 ,
      kelas: '<h1>kelas PPLG XI-1</h1>',
      nonaktif: true ,
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
    showPassword(){
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
      }else{
        this.typeInput = 'password';
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
    countComputed() {
      this.counterButton += 1;
    }
  }
}
</script>
<style>
.color{
  color:#0905ee;
}
.fs40px{
  font-size: 60px;
}
.active{
  color:#ce3f3f75;
}
</style>