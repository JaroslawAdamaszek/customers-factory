<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Mail\NewCustomer;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        return view('customers.created');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(CustomerStoreRequest $request): \Illuminate\Http\RedirectResponse
    {

        $customer = new Customer();

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->nip = $request->nip;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        Mail::to('admin@example’')->send(new \App\Mail\NewCustomer($customer));

        $customer->save();

        return redirect()->route('customers.index')->with('message', 'Customer created successfully');

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

        return view('customers.show', compact('customer'));
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

        return view('customers.edit', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(CustomerUpdateRequest $request, $id): \Illuminate\Http\RedirectResponse
    {

        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->company_name = $request->company_name;
        $customer->nip = $request->nip;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect()->route('customers.index')->with('message', 'Customer updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $customer = Customer::where('id', $id)->firstOrFail();

        $customer->delete();

        return redirect()->route('customers.index')->with('message','Customer deleted successfully');

    }
}
