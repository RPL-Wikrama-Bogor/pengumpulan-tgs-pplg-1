<template>
  

  <p>--------------------Templating-------------------------</p>
  <div v-html="nama"></div>
  <p>{{ ID }}</p>
  <p>{{ jurusan }}</p>
  <p>{{ kelas }}</p>
  <p>--------------------Data Binding-----------------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">appeared</h1>
  <input :type="type">
  <p>--------------------Data Binding-----------------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>--------------------v-if-----------------------</p>
  <button v-if="show">Submit</button>
  <button v-show="show">Submit</button>
  <div v-if="count == 1">
  number 1
  </div>
  <div v-if="count == 2">
  number 2
  </div>
  <div v-else>
  Lebih dari 2
  </div>

  <p>==============computed dan method===============</p>
  <button @click="counterNumber">methods {{ counterButton }}</button>
  <button>Computed {{ numberComputed }}</button>
  <p>=============================</p>
  <input :type="typeInput">
  <button @click="showPassword">Show Password</button>

  <p>==============Class dan style===============</p>
  <ul>
    <li class="fs" :class="{
      active:isActive,
      fs40px:isActive
      }">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <ul>
    <li v-for="(item, index) in daftarKelas">
      {{ index+1 }}
      {{ item }}
    </li>
  </ul>
  <p>==============V-Model===============</p>
  <input type="text" v-model="Inputkelas">
  {{ Inputkelas }}

</template>

<script>
export default{
  data(){
    return{
      Inputkelas: '',
      daftarKelas: ['RPL 1','RPL 2','RPL 3',],
      counterButton: 1,
      numberComputed: 0,
      show: true,
      count: 1,
      nama: '<h1>Daffi</h1>',
      ID: 102,
      jurusan: 'PPLG',
      kelas: 'XI - 1',
      nonaktif: false,
      property: {
        id: 1,
        class : 'color'
      },
      typeInput: 'Password',
      isActive: true
    }
  },

  methods:{
  counterNumber(){
    this.counterButton += 1;
  },

  showPassword(){
  if (this.typeInput == 'password') {
    this.typeInput = 'text';
  }
  else{
    this.typeInput = 'password';
  }
},
  ubahWarna(){
    if (this.isActive) {
      this.isActive=false;
    }
    else{
      this.isActive=true;
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
      font-size: 20px;
    }
    .fs40px{
      font-size: 40px;
    }
    .active{
      color: blue;
    }

  </style>
