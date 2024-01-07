<template>
  <p>-----------------templating----------------------</p>
  {{ nama }}
  {{ number }}
  <!-- {{ kelas }} -->
  <div v-html="kelas"></div>
  <p>-----------------data blinding----------------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">nay</h1>
  <input :type="type"> 
  <p>-----------------data blinding----------------------</p>
  <!-- {{ count + 1 }} -->
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-----------------v-if----------------------</p>
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
  <p>-----------------computed dan methods---------------------</p>
  <input :type="type">
  <button @click="showPassword">show password</button>
  <!-- <button @click="counterNumber">Methods {{ counterButton }}</button>
  <button>Computed {{ numberComputed }}</button> -->
  <p>-----------------class dan style---------------------</p>

  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>-----------------list rendering---------------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index+1 }}{{ item }}</li>
  </ul>
  <p>-----------------v-model---------------------</p>
  <input type="text" v-model="Inputkelas">
  {{ Inputkelas }}
</template>

<script>
  export default{
    data(){
      return{
        Inputkelas: '',
        daftarKelas:['PPLG XI-1', 'PPLG XI-2','PPLG XI-3'],
        counterButton: 0,
        numberComputed: 0,
        show: true, //kalau true button bisa disubmit kalau false ga bisa disumbit
        count: 3,
        nama: 'Naya',
        number: 3,
        kelas: '<h1>kelas pplg xi-1</h1>',
        nonaktif: true, //or false, kalau true atributnya ada kalau false atributnya di hilangkan
        property: {
          id: 1,
          class: 'color'
        },
        type: 'password', //or text
        isActive: true
      }
    },
    methods:{
      counterNumber(){
        this.counterButton += 1;
      },
      showPassword(){
        if (this.type == 'password') {
          this.type = 'text';
        } else{
          this.type = 'password';
        }
      },
      ubahWarna(){
        if (this.isActive) {
          this.isActive = false;
        }else {
          this.isActive = true
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

<style >
.color {
  color: rgb(0, 247, 255);
}
.fs40px {
  font-size: 40px;
}
.active {
  color: blue;
}
</style>