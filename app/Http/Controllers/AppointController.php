<?php

namespace App\Http\Controllers;

use App\Models\Appoint;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Appoint::all();
        return view('regular', ['datas' => $datas]);
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
        $datas = new  Appoint();
        $datas->docname = $request->docname;
        $datas->fname = $request->fname;
        $datas->age = $request->age;
        $datas->sex = $request->sex;
        $datas->occu = $request->occu;
        $datas->phone = $request->phone;
        $datas->email = $request->email;
        $datas->addr = $request->addr;
        $datas->cardn = $request->cardn;
        $datas->authn = $request->authn;
        $datas->date = $request->date;
        $datas->payment = $request->payment;
        $datas->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appoint  $appoint
     * @return \Illuminate\Http\Response
     */
    public function show(Appoint $appoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appoint  $appoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoint $appoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appoint  $appoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoint $appoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appoint  $appoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoint $appoint)
    {
        //
    }
}