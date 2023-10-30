<template>
  <p>-----Templating-----</p>
  <p> {{ nama }}</p>
  <div v-html="kelas"></div>

  <p>-----Data Binding-----</p>
  <button :disabled="nonaktif">Button</button>
  <h1 v-bind="property">Test</h1>
  <input :type="type">
  <p>-----Data Binding-----</p>
  <p>{{ count == 0 ? count + 1 : count + 2 }}</p>
  <p>-----V-if-----</p>
  <button v-if="check">Submit</button>
  <div v-if="count==1">
    1
  </div>
  <div v-else-if="check==2">
    2
  </div>
  <div v-else="check">
    Another Number
  </div>

  <p>-----Computed dan Methods-----</p>
  <button @click="counterNumber()">Methods {{ counterButton }}</button>
  <br>
  <button @click="counterComputed()">Computed {{ computedNumber }}</button>
  <br>
  <input :type="inputType">
  <button @click="showPassword()">Show Password</button>

  <p>-----Class dan Style-----</p>

  <ul>
    <li class="fs" :class="{active:isActive, fs4rem:isActive}">
      test
    </li>
  </ul>
  <button @click="changeColor()">Change Color</button>

  <p>-----List Rendering-----</p>

  <ul>
    <li v-for="(data, index) in dataKelas">{{index+1}} {{data}}</li>
  </ul>

  <p>-----V-model-----</p>
  <input v-model="inputKelas" type="text" />
  {{ inputKelas }}
</template>

<script>
 export default{
  data(){
    return {
      inputKelas:'' ,
      dataKelas:['PPLG 1', 'PPLG 2', 'PPLG 3'],
      check: true,
      counterButton: 0,
      computedNumber: 0,
      count: 1,
      nama:'Ragibavi',
      kelas:"<h1>Kelas 11</h1>",
      nonaktif: true,
      property: {
        id: 1,
        class:'color'
      },

      inputType:'password',
      type:'datetime-local',
      isActive:true,
    }
  },
  methods:{
    counterNumber(){
      this.counterButton++
    },
    showPassword(){
      if(this.inputType == 'password'){
        this.inputType = 'text'
      }else{
        this.inputType = 'password'
      }
    },
    changeColor(){
      if(this.isActive == true){
        this.isActive = false
      } else {
        this.isActive = true
      }
    }
  },
  computed:{
    counterComputed(){
      this.computedNumber++
    }
  }
 }
</script>

<style>

.color {
  color: red;
}

.fs{
  font-size: 2rem;
}

.fs4rem{
  font-size: 4rem;
}

.active{
  color: blue;
}


</style>