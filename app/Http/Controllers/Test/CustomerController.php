<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }
    
    public function index()
    {
        $customers = $this->customer->paginate(10);
        
        return view('work_test.customer.index', compact('customers'));
    }
    
    public function create()
    {
        return view('work_test.customer.create');
    }

    public function store(Request $request)
    {
        $this->customer->create($request->all());
        
        return redirect()->route('work_test.customers.index');
    }

    public function edit($id)
    {
        $customer = $this->customer->find($id);

        return view('work_test.customer.edit', compact('customer'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');

        $this->customer->update($data, $id);
        
        return redirect()->route('work_test.customers.index');
    }
    
    public function destroy($id)
    {
        $this->customer->delete($id);

        return redirect()->back();
    }
}
