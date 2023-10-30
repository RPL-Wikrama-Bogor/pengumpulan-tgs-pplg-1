<template>
  <p>------------temptalting--------------</p>
 {{ nama }}
 {{ status }}
 <div v-html="kelas"> </div>
 <button :disabled="nonaktif">button</button>
 <h1 v-bind="property"> hao </h1>
 <input :type="type">
 <p>--------------data binding------------------</p>
 {{ count + 1 }}
 {{ count==0 ? count + 1: count + 2 }}

 <p>----------------v-if----------------------------</p>
 <button v-if="show">submit</button> <!-- jika kondisi false dia akan menghilang -->
 <button v-show="show">submit</button> <!-- jika kondisi false dia akan disembunyikan -->

 <div v-if="count == 1">
  number 1
 </div>
 <div v-else-if="count == 2">
  number 2
 </div>
 <div v-else>
  lebih dari 2
</div>

<!-- <p>------------------computed dan methods--------------------------</p>
<button @click="counterNumber"> methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button> -->

<p>------------------computed dan methods 2--------------------------</p>

<input :type="typeInput">
<button @click="showPassword">show password</button>

<p>------------------class dan style-------------------------</p>

<ul>
  <li :class="{active:isActive, fs150px: isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>

<p>---------list rendering-----------</p>

<!-- menampilkan dengan cara manual -->
<!-- <ul>
  <li>RPL 1</li>
  <li>RPL 2</li>
  <li>RPL 3</li>
</ul> -->

<!-- menampilkan dengan array -->
<ul>
  <li v-for="(item, index) in daftarKelas">{{ index+1 }}{{ item }}</li>
</ul>

<p>---------v-model-----------</p>
<input type="text" v-model="inputKelas" > {{ inputKelas }}


</template>

<script>
export default {
  data(){
    return {
      inputKelas: '',
      daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
      typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 5,
      nama : 'minghao',
      status : 'pacar liya',
      kelas : '<h1>pplg 1</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isActive: true
    }
  },

  methods: {
    counterNumber (){
      this.counterButton += 1;
    },

    showPassword() {
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
      }else{
        this.typeInput ='password';
      }
    },

    ubahWarna(){
      if(this.isActive) {
        this.isActive = false;
      } else {
        this.isActive = true
      }
    }


  }

  // computed: {
  //   countComputed (){

  //   }
  // }
}
</script>

<style>
.color{
  color: burlywood;
}
.fs150px{
  font-size: 150px;
}
.active{
  color: purple;
}
</style>