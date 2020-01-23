<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers=customer::all();
        // $customers = DB::select ('select * from customers');
        // return view ('customers.index')->with ('customers', $customers);

        
         $customers = customers::orderby('cid','asc')->get();
        
         return view('customers.index')->with ('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
            $customer = Customer::all();
            return view('customers.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = create ($this->validateData());
        return redirect ('customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($customer)
    {
        // $customers =  customer::find($customer);
        return view('customers.show', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customers = customer::all();
        
        // return redirect('/customers')->with('success', 'Customer Edited');
        return view ('customers.edit',compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer)
    {
        $customer-> update($this->validateData());            
        return redirect('/customers/'.$customer->cid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        $Customer->delete();
        return redirect('/customers')->with ('success', 'Customer Deleted');
        
    }

    public function validateData()
    {
        return request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'mname'=>'',
            'dob'=>'required|date',
            'gender'=>'required',
            'email'=>'required|email'

        ]);
    }
}
