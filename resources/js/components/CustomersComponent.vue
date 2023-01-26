<template>

    <h1>{{ title }}</h1>

    <table class="table table-striped w-75 m-auto mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Address</th>
            <th scope="col">Nip</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="customer in customers">
            <th scope="row">{{ customer.id }}</th>
            <td>{{ customer.name }}</td>
            <td>{{ customer.company_name }}</td>
            <td>{{ customer.address }}</td>
            <td>{{ customer.nip }}</td>
            <td>{{ customer.phone }}</td>
            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                <router-link to="" class="btn btn-primary w-100 mb-2">Edit</router-link>
                <button class="btn btn-danger w-100" type="button" @click="deleteCustomer(customer.id)">
                    Delete
                </button>
            </td>
        </tr>
        </tbody>
    </table>
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
    },
    methods: {
        deleteCustomer(id) {
            axios.delete('/api/customers/' + id)
                .then(response => {
                    let i = this.customers.map(data => data.id)
                        .indexOf(id);
                    this.customers.splice(i, 1);
                })
        }
    }
}
</script>

<style scoped>

</style>
