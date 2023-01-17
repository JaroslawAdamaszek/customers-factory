import './bootstrap';

import {createApp} from 'vue';

import * as VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent.vue';

import LoginComponent from './components/LoginComponent.vue';

const routes = [
    {
        path: '/example',
        component: ExampleComponent
    },
    {
        path: '/login',
        component: LoginComponent
    }

]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes,
})

const app = createApp({})

app.use(router)

app.mount('#app');
