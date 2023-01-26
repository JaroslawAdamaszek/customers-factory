<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form @submit.prevent="customerUpdate">
                        <div class="row mb-3 mt-5">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" v-model="customers.name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">Company:</label>
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" v-model="customers.company_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Address:</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" v-model="customers.address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip" class="col-md-4 col-form-label text-md-end">Nip:</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" v-model="customers.nip">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Phone:</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" v-model="customers.phone">
                            </div>
                        </div>
                        <div class="mb-3 w-50 m-auto">
                            <button type="submit" class="btn btn-primary w-100 m-auto mb-2" @click="customerUpdate(customers.id)">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "EditCustomer",
    props:{
      id: {
          type: Number,
      }
    },
    data(){
        return {
            customers: [],
        }
    },
    mounted() {
        this.showCustomer();
    },
    methods:{
        showCustomer(){
            axios.get('/api/customers/' + this.id)
            .then(response => {
                this.customers = response.data;
                console.log(response.data);
            })
        },
        customerUpdate(id) {
            axios.put('/api/customers/' + id, this.customers)
                .then((response) => console.log(response))
        }
    }

}
</script>

<style scoped>

</style>
