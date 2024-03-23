<?php

namespace App\Http\Controllers;

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
        return view('newpatients', ['customers' => $customers]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = new  Customer();
        $datas->docname = $request->docname;
        $datas->fname = $request->fname;
        $datas->age = $request->age;
        $datas->sex = $request->sex;
        $datas->occu = $request->occu;
        $datas->addr = $request->addr;
        $datas->phone = $request->phone;
        $datas->email = $request->email;
        $datas->authn = $request->authn;
        $datas->date = $request->date;
        $datas->payment = $request->payment;
        $datas->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = Customer::find($id);
        $datas->update([
            'docname' => $request->input('docname'),
            'fname' => $request->input('fname'),
            'age' => $request->input('age'),
            'sex' => $request->input('sex'),
            'occu' => $request->input('occu'),
            'addr' => $request->input('addr'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'authn' => $request->input("authn"),
            'date' => $request->input('date'),
            'payment' => $request->input('payment')
        ]);

        return redirect('/newpatients');
    }

    public function seeUpdate(Request $request, $id)
    {
        $datas = Customer::find($id);
        return view('edit-new',['datas' => $datas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
