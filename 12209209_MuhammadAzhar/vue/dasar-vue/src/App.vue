<template>
  <p>--------Templating---------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>-------Data Binding--------</p>
  <button v-if="show" :disabled="nonaktif">button</button>
  <h1 v-bind="property">KSY</h1>
  <input :type="typeInput">
  <p>-------Data Binding--------</p>
  {{ count == 0 ? count = 1 : count + 2 }}
  <p>-------v-if--------</p>
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
    <li class="fs">
      text
    </li>
  </ul>
</template>

<script>
  export default{
    data(){
      return{
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 1,
        nama: 'AR',
        number: 12209209,
        kelas: '<h1>PPLG XI-1<h1>',
        nonaktif: true,
        property: {
          id: 1,
          class: 'color'
        },
        typeInput: 'password'
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
</style>