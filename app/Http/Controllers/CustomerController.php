<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

         $customers = Customer::all();

//        dd($customers)->toArray();

        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        return view('welcome');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function store(CustomerStoreRequest $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        $customer = new Customer();

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->nip = $request->nip;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        $customer->save();

        return view('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return
     */

    public function show($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $customer = Customer::where('id', $id)->firstOrFail();

//         dd($customer->toArray());

        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function edit($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $customer = Customer::find($id);

//        dd($customer->toArray());

        return view('welcome');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function update(CustomerUpdateRequest $request, $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->nip = $request->nip;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        $customer->save();

        return view('welcome');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return
     */

    public function destroy($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $customer = Customer::where('id', $id)->firstOrFail();

        $customer->delete();

        return view('welcome');

    }
}
