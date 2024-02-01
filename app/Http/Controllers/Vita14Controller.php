<?php

namespace App\Http\Controllers;

use App\Models\Vita14;
use Illuminate\Http\Request;

class Vita14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita14::all();
        return view('vita14.vita14',['datas' => $datas]);
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
        $datas = new Vita14();
        $datas->stock_item = $request->stock_item;
        $datas->quantity = $request->quantity;
        $datas->delivery_no = $request->delivery_no;
        $datas->date_delivered = $request->date_delivered;
        $datas->date_recieved = $request->date_recieved;
        $datas->save();
        return redirect('/vita15');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vita14  $vita14
     * @return \Illuminate\Http\Response
     */
    public function show(Vita14 $vita14)
    {
        $datas = Vita14::all();
        return view('vita14.vita1Store',['datas' => $datas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita14  $vita14
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita14 $vita14)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita14  $vita14
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita14 $vita14)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita14  $vita14
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita14 $vita14)
    {
        //
    }
}
