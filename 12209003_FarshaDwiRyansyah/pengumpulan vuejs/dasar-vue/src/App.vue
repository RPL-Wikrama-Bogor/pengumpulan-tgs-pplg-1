<template>
  <p>--------Templating---------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>

  <p>-------Data Binding--------</p>
  <button v-if="show" :disabled="nonaktif">button</button>
  <h1 v-bind="property">Nakama</h1>
  <input :type="typeInput">

  <p>-------Data Binding--------</p>
  {{ count == 0 ? count = 1 : count + 2 }}

  <p>-------V-If--------</p>
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

  <p>-------Computed & Method--------</p>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <!-- <button @click="counter  Number">Methods {{ count  erButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button> -->

  <p>---------Class & Style----------</p>
  <ul>
    <li :class="{active:isActive, fs40px:isActive}">
      text
    </li>
  </ul>
  <button @click="ubahWarna">Ubah</button>

  <p>--------List Rendering---------</p>
  <ul>
    <li v-for="(item,index) in daftarKelas">{{ index+1 }} {{ item }}</li>
  </ul>

  <p>--------V-Model---------</p>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
</template>

<script>
  export default{
    data(){
      return{
        inputKelas: '',
        daftarKelas: ['KLN 7', 'KLN 8', 'KLN 9'],
        typeInput: 'password',
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 1,
        nama: 'Erny Supriadi',
        number: 12408878,
        kelas: '<h1>KLN X-8<h1>',
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
        this.counterButton += 1;
      },
      showPassword(){
        if (this.typeInput == 'password'){
          this.typeInput = 'text'
        } else{
          this.typeInput = 'password'
        }
      },
      ubahWarna(){
        if(this.isActive){
          this.isActive = false;
        } else{
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
  color: plum;
}
.fs40px {
  font-size: 40px;
}
.active {
  color: greenyellow;
}
</style>