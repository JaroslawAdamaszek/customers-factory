<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form @submit.prevent="createCustomer">
                        <div class="row mb-3 mt-5">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"
                                       v-model="customerData.name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">Company:</label>
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name"
                                       v-model="customerData.company_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Address:</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"
                                       v-model="customerData.address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip" class="col-md-4 col-form-label text-md-end">Nip:</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" v-model="customerData.nip">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Phone:</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone"
                                       v-model="customerData.phone">
                            </div>
                        </div>
                        <div class="mb-3 w-25 h-25 m-auto">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default {
    name: 'new customer',
    setup: () => ({
        title: 'Welcome new customer page!'
    }),
    data() {
        return {
            customerData: {
                name: '',
                company_name: '',
                address: '',
                nip: '',
                phone: '',
            }
        }
    },
    methods: {
        createCustomer() {
            axios.post('/api/customers/', this.customerData)
                .then((response) => console.log(response))
        }
    }
}
</script>

<style>

</style>
