<template>
  <p>==================Templating==================</p>
  {{ nama }}
  {{ nis }}
  <div v-html="kelas"></div>
  <p>==================Data Binding==================</p>
  <button :disabled="nonaktif">Button</button>
  <h1 v-bind="property">test</h1>
  <input :type="typeInput">
  <p>==================Data Binding==================</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>==================V-if==================</p>
  <button v-if="show">v-if</button>
  <button v-show="show">v-show</button>
  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>==================Computed & Method==================</p>
  <!-- <button @click="counterNumber">Methods {{ counterButton }}</button> <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button> <br> -->
  <input :type="typeInput">
  <button @click="showPassword">{{ passwordButton }}</button>
  <p>==================Class & Style==================</p>
  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah Warna</button>
  <p>==================List Rendering==================</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index+1 }}. {{ item }}</li>
  </ul>
  <p>==================V-Model==================</p>
  <input type="text" v-model="inputKelas"> {{ inputKelas }}
</template>

<script>
export default {
  data() {
    return {
      inputKelas: '',
      daftarKelas: ['PPLG XI-1', 'PPLG XI-2', 'PPLG XI-3', 'PPLG XI-4', 'PPLG XI-5', 'PPLG XI-6'],
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 1,
      nama: 'Fadly',
      nis: 12209166,
      kelas: '<h1>PPLG XI-1</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      passwordButton : 'Show👁️',
      isActive: true
    }
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
        this.passwordButton = 'Hide❌';
      } else {
        this.typeInput = 'password';
        this.passwordButton = 'Show👁️';
      }
    },
    ubahWarna() {
      if(this.isActive){
        this.isActive = false;
      } else {
        this.isActive = true;
      }
    }
  },
  computed: {
    countComputed() {
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