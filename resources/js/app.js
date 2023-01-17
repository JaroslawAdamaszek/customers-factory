import './bootstrap';

import {createApp} from 'vue';

import * as VueRouter from 'vue-router';

import RegisterComponent from './components/RegisterComponent.vue';

import LoginComponent from './components/LoginComponent.vue';

import CustomersComponent from "./components/CustomersComponent.vue";

const routes = [
    {
        path: '/login',
        component: LoginComponent
    },
    {
        path: '/register',
        component: RegisterComponent
    },
    {
        path: '/customers',
        component: CustomersComponent
    }


]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/api'),
    routes,
})

const app = createApp({})

app.use(router)

app.mount('#app');
