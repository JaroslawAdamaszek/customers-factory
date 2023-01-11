<?php

namespace Tests\Feature;

use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_customers_index()
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);

    }


    public function test_customers_store()
    {

        $customer = Customer::factory()->create();

       $response = $this->post('/customers/created',[

            'name' => $customer->name,
            'company_name' => $customer->company_name,
            'nip' => $customer->nip,
            'address' => $customer->address,
            'phone' => $customer->phone,

        ]);

        $response->assertStatus(200);

    }

}
