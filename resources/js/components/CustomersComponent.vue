<template>

    <h1>{{ title }}</h1>

    <li v-for="customer in customers">
        {{ customer.name }}
    </li>

</template>

<script>
export default {
    name: "CustomersComponent",
    setup: () => ({
        title: 'Welcome Customers page!'
    }),
    data() {
        return {
            customers: [],
        }
    },
    created() {
        axios.get('/api/customers/')
        .then(response => {
            this.customers = response.data;
            console.log(response.data)
        })
    }
}
</script>

<style scoped>

</style>
