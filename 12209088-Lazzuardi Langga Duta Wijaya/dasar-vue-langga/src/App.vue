<template>
  <p>------------templating-------------</p>
  {{nama}}
  {{number}}
  <div v-html="kelas"></div>
  <p>-------------data binding------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">lang</h1>
 
  <p>-------------data binding------------</p>
  {{ count==0 ? count+1 : count+2 }}
  <p>-------------v-if------------</p>

  <button v-if="show">submit</button>  
  <button v-show="show">submit</button>

  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    number selain 1 dan 2
  </div>
  <p>-------------computed dan methods------------</p>
 
  <button @click="counterNumber()">methods {{ counterButton }}</button>
  <button @click="countComputed()">Computed {{ numberComputed }}</button><br>

  <input :type="typeInput">
  <button @click="showPassword()">Show Password</button>

  <p>-------------class dan style------------</p>

<ul>
  <li class="fs" :class="{active:isActive, fs40px:isActive}">
    wouy
  </li>
</ul>
<button @click="ubahWarna()">ubah warna dan ukuran</button>

<p>-------------list rendering------------</p>
<ul>
  <li v-for="(item,index) in daftarKelas">{{ index+1 }}{{ item }}</li>
</ul>

<p>-------------v-model------------</p>
<input type="text" v-model="InputKelas">
{{ InputKelas }}

</template>


<script>
export default{
  data(){
    return {
      InputKelas: '',
      daftarKelas:['PPLG 1','PPLG 2','PPLG 3'],
      counterButton: 0,
      numberComputed: 0,
      show:false,
      count:5,
      nama:'langga',
      number:1,
      kelas:'<h1>kelas 11</h1>',
      nonaktif:false,
      property: {
        id:1,
        class : 'color'
      },
      typeInput:'password',
      isActive:true
    }
  },
  methods: {
    counterNumber(){
      this.counterButton++
    },

    showPassword(){
      if (this.typeInput == 'password'){
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },

    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else {
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

.fs40px {
  font-size: 40px;
}

.active {
  color:blue;
}
</style>