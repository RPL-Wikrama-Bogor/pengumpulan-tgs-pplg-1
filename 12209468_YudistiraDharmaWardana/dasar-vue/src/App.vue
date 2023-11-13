<template>
  <P>----------------------Templating----------------------------------</P>

  {{nama}}
  {{nis}}
  <div v-html="kelas"></div>
  <h1 v-bind="property">zae</h1>
  <button :disabled="nonaktif">button</button>
  <input :type="typeInput">
  {{count + 1}}

  <P>----------------------Data Binding----------------------------------</P>

  {{count == 0 ? count + 1 : count + 2}}

  <P>----------------------v-if----------------------------------</P>

  <button v-if="show">button</button>
  <button v-show="show">submit</button>

  <div v-if="count == 1">
    number 1
  </div>

  <div v-else-if="count == 2 ">
    number 2
  </div>

  <div v-else>
    lebih dari 2
  </div>
  
  <P>----------------------COMPUTED dan METHOD----------------------------------</P>

  <button @click="counterNumber">methods {{ counterButton }}</button>
  <button @click="countComputed">computed {{numberComputed}}</button><br>

  <input :type="typeInput">
  <button @click="showPassword">Show Password</button>

  <P>----------------------Class daN Style Binding----------------------------------</P>

  <ul>
    <li :class="{active:isActive , fs40px:isActive}">
      text
    </li>
  </ul>
  <button @click="ubahWarna">Ubah Warna </button>

  <P>----------------------list rendering----------------------------------</P>

  <ul>
    <li v-for="(item,index) in daftarKelas">{{ index + 1 }} {{ item }}</li>
  </ul>

  <P>----------------------v-model----------------------------------</P>

  <input type="text" v-model="inputKelas">
  {{inputKelas}}

  
</template>

<script>
export default {
  data(){
    return {
      inputKelas: '' ,
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count:1,
      nama : 'zaenal',
      nis : 12209468,
      kelas:'<h1>PPLG XI-1</h1>',
      nonaktif: true,
      
      property: {
        id:1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true,
      daftarKelas: ['RPL 1' , 'RPL 2' , 'RPL 3']
    }
  },
  methods:{
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
      if(this.isActive == true){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    },
  },  
  computed: {
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
.fs40px{
  font-size: 40px;
}
.active{
  color:blue;
}

</style>
