import {createWebHistory, createRouter} from "vue-router";

import RegisterComponent from './components/RegisterComponent.vue';
import LoginComponent from './components/LoginComponent.vue';
import CustomersComponent from "./components/CustomersComponent.vue";
import NewCustomerComponent from "./components/NewCustomerComponent.vue";

const routes = [
    {
        path: '/login',
        name: 'login',
        component: LoginComponent
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterComponent
    },
    {
        path: '/customers',
        name: 'customers',
        component: CustomersComponent
    },
    {
        path: '/customers/create',
        name: 'new customer',
        component: NewCustomerComponent
    },
]
const router = createRouter({
    history: createWebHistory('/'),
    routes: routes
})

export default router;

