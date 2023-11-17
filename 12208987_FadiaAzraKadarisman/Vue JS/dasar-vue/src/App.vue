<template>
  <p>-------------templating------------</p>
  {{ nama }}
  {{ nis }}
  <div v-html="rombel"></div>
  <p>-------------data binding------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Fadia</h1>
  <input :type="type">
  <p>-------------data binding------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-------------v-if---------------------</p>
  <button v-if="show">Submit</button>
  <button v-show="show">Submit</button>

  <div v-if="count == 1">
    Number 1
  </div>
  <div v-else-if="count == 2">
    Number 2
  </div>
  <div v-else>
    Lebih dari 2
  </div>
  <p>-------------computed dan methods-------------------</p>
  <button @click="counterNumber">Methods {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>-------------class dan style-------------------</p>
  <ul>
    <li :class="{active:isActive, fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah Warna</button>
  <p>-------------list rendering-------------------</p>
  <ul>
    <li v-for="(item, index) in daftarRombel">{{ index+1 }}{{ item }}</li>
  </ul>
  <p>-------------v-model-------------------</p>
  <input type="text" v-model="inputRombel">
  {{ inputRombel }}
</template>

<script>
export default{
  data(){
    return{
      inputRombel: '',
      daftarRombel:['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 5,
      nama:'Fadia ',
      nis: 12208987,
      rombel: '<h1>PPLG XI-1</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      type: 'text',
      isActive: true
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
        this.typeInput == 'password';
      }
    },
    ubahWarna(){
      if (this.isActive) {
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
  color: red;
}
.fs40px{
  font-size: 40px;
}
.active{
  color: blue;
}
</style>