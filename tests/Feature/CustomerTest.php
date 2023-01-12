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

    public function test_customers_update()
    {
        $customerId = 1;

        $response = $this->put('/customers/update/' . $customerId, [

            'name' => 'Test1 Customer',
            'company_name' => 'Test Company',
            'nip' => '1122334455',
            'address' => 'Test address',
            'phone' => '0123456789',

        ]);

        $response->assertStatus(200);

    }

    public function test_customer_show()
    {
        $customerId = 2;

        $response = $this->get("/customers/show/{$customerId}");

        $response->assertStatus(200);


    }

    public function test_customer_destroy()
    {
        $customerId = 3;

        $response = $this->delete("/customers/delete/{$customerId}");

        $response->assertStatus(200);


    }

    public function test_customer_edit()
    {

        $customerId = 2;

        $response = $this->get("/customers/show/{$customerId}");

        $response->assertStatus(200);

    }

    public function test_customer_create()
    {
        $response = $this->get('/customers/form/');

        $response->assertStatus(200);
    }

}
