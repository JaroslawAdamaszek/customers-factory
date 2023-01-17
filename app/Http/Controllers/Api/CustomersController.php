<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use http\Client\Response;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {

        $customers = Customer::all();

    }

}
