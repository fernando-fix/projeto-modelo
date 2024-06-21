import './bootstrap';

import Alpine from 'alpinejs';

import { createApp } from 'vue';
import Example from '../views/examples/Example.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp();

app.component('example', Example);

app.mount('#app');

