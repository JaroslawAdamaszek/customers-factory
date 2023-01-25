<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use http\Client\Response;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {

        $customers = Customer::select('id', 'name', 'company_name', 'address', 'nip', 'phone')->get();

        return response()->json($customers);

    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {

        $customer = new Customer();

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->address = $request->address;
        $customer->nip = $request->nip;
        $customer->phone = $request->phone;

        $customer->save();

        return response()->json(['message' => 'Customer create!']);
    }


    public function destroy(Customer $customer): \Illuminate\Http\JsonResponse
    {

        $customer->delete();

        return response()->json(['message' => 'Customer delete!']);

    }
}
