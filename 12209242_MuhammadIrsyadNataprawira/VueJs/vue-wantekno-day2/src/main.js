import { createApp } from 'vue'
import App from './App.vue'
import './assets/style.css'

import Button from './components/Button.vue'

const app = createApp(App)
app.component('Button', Button)
app.mount('#app')
