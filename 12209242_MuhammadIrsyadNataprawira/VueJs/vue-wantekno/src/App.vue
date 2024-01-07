<script setup>
import Text from '@/components/Text.vue'
import { ref, reactive, watch } from 'vue'
import gsap from 'gsap'

const message = ref('')
const selected = ref('')
const count = ref(0)
const x = ref(0)

const number = ref(0)
const tweened = reactive({ 
  number: 0
})

watch(number, (n) => {
  gsap.to(tweened, { duration: 0.5, number: Number(n) || 0})
})

function onMousemove(e) {
  x.value = e.clientX
}

</script>
<script>
export default {
    data() {
      
      return {
        data: ['PPLG XI-1', 'PPLG XI-2', 'PPLG XI-3'],
        numberComputed: 0,
        counterButton: 0,
        show: false,
        nonaktif: true ,
        property : {
          id: 1,
          class: 'primary'
        },
        tipeInput: 'password',
        isActive: true
      }
    },
    methods: {
      countNumber() {
        this.counterButton += 1
      },
      reset() {
        this.count = 0
      },
      showPassword() {
        if (this.tipeInput == 'password') {
          this.tipeInput = 'text'
        } else {
          this.tipeInput = 'password'
        }
      },
      activeColor() {
        if ( this.isActive == true ) {
          this.isActive = false
        } else {
          this.isActive = true
        }
      }
    },
    computed: {
      countComputed() {
        this.numberComputed += 1
      },

    }
  }
</script>

<template>
  <Text text="Hallo ini adalah vue"/>

  <div @mousemove="onMousemove" :style="{ backgroundColor: `hsl(${x}, 80%, 50%)`}" class="movearea mt-5">
    <p>Gerakan mousenya didalam div ini</p>
    <p>x: {{ x }}</p>
  </div>
  <div class="watcher">
    Type a number: <input v-model.number="number">
    <p>{{ tweened.number.toFixed(0) }}</p>
  </div>
  <hr>

  <button :disabled="nonaktif">Button</button>
  <h1 v-bind="property">This is an element with attribute</h1>
  
  <p class="">Your message: {{ message  }}</p>
  <input v-model="message" placeholder="Type on me...">
  
  <hr>

  <button @click="count++">Increment</button>
  <p class="btn">{{ count }}</p>
  <button class="reset-btn"  @click="reset">Reset</button>

  <hr>

  <button @click="countNumber">Method {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <br>
  <input :type="tipeInput" placeholder="This is an input field"><button @click="showPassword">Show</button>
  <hr>

  <ul>
    <li class="fs" :class="{active: isActive}">test</li>
  </ul>
  <button @click="activeColor">{{ isActive ? 'Nonaktif' : 'Aktif' }}</button>

  <br>
  <br>

  <p>Selected: {{ selected }}</p>
  <select v-model="selected">
    <option selected disabled>Please Select One</option>
    <option v-for="_ in data">{{ _ }}</option>
  </select>

</template>

<style scoped>
  .primary {
    background-color: hsla(242, 45%, 61%, 0.797);
    padding: 2px 4px;
    width: 50%;
  }

  .btn {
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px 1px;
    width: 10%;
    text-align: center;
    font-weight: bold;
  }

  .reset-btn {
    margin-left: 15px;
  }

  .fs {
    font-size: 2rem;
  }
  .active {
    color: hsla(240, 100%, 50%, 0.733);
  }

  .movearea {
    transition: 0.3s background-color ease;
    padding: 50px 50px;
    width: 30%;
    border-radius: 10px;
  }

  .mt-5 {
    margin-bottom: 10px;
  }

</style>