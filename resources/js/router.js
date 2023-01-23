import {createWebHistory, createRouter} from "vue-router";

import RegisterComponent from './components/RegisterComponent.vue';
import LoginComponent from './components/LoginComponent.vue';
import CustomersComponent from "./components/CustomersComponent.vue";

const routes = [
    {
        path: '/login',
        name: 'Login',
        component: LoginComponent
    },
    {
        path: '/register',
        name: 'Register',
        component: RegisterComponent
    },
    {
        path: '/customers',
        name: 'Customer',
        component: CustomersComponent
    },
]
const router = createRouter({
    history: createWebHistory('/'),
    routes: routes
})

export default router;

