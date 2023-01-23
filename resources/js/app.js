import './bootstrap';

import {createApp} from "vue";

import router from "./router";

const App = createApp({});

createApp(App).use(router).mount('#app');
