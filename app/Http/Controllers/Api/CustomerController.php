<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        
        return response()->json([
            'success' => true,
            'message' => 'Daftar Customer',
            'data'    => $customers
        ]);
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Customer berhasil ditambahkan',
            'data'    => $customer
        ], 201);
    }

    public function show(Customer $customer)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail Customer',
            'data'    => $customer
        ]);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Customer berhasil diupdate',
            'data'    => $customer
        ]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            'success' => true,
            'message' => 'Customer berhasil dihapus'
        ]);
    }
}