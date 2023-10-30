<template>
  <p>----------------templating----------------</p>
  <div v-html="nama"></div>
  <div v-html="number"></div>
  <div v-html="nis"></div>
  <div v-html="kelas"></div>
  <p>----------------data binding----------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">yoga</h1>
  <input :type="type">
  <p>----------------data binding----------------</p>
  {{ count == 0 ? count = 1 : count + 2 }}
  <p>----------------v-if----------------</p>
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
  <p>----------------computed dan methods----------------</p>
  <button @click="counterNumber">{{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>

  <input :type="type">
  <button @click="showPassword">show password </button>
  <p>----------------class dan style----------------</p>

  <ul>
    <li :class="{active :isactive, fs40px:isactive}">
      test
    </li>
  </ul>
  <button @click="gantiwarna">ubah warna</button>
</template>

<script>
export default{
  data(){
    return{
      counterButton: 0,
      numberComputed: 6,
      show: true,
      count: 1 ,
      nama: 'Rasya Yoga',
      number: '27',
      nis:'12209185',
      kelas: '<h1>PPLG Xl 1</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isactive:true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
      if(this.type == 'password'){
        this.type = 'text';
      }else{
        this.type = 'password';
      }
    },
    gantiwarna(){
     if (this.isactive== true){
     this.isactive=false
     }
     else{
        this.isactive=true
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
.fs40px{
  font-size: 40px;
}
.active{
  color:blue;
}
</style>