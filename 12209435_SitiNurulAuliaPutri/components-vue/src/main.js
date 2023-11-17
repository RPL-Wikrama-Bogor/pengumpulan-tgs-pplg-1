import { createApp } from 'vue';
import App from './App.vue';

import Btn from '@/components/my_components/Button.vue';

const app = createApp(App);
app.component("MyBtn", Btn);
app.mount("#app");
