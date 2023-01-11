<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers = Customer::all();

//        dd($customers)->toArray();

        #return view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $customer = Customer::find($id);

//        dd($customer->toArray());

        #return view

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

//        dd($customer->toArray());

        #return view

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, $id): \Illuminate\Http\Response
    {

        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->nip = $request->nip;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        $customer->save();

        #return redirect

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
