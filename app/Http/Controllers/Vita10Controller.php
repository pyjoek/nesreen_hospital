<?php

namespace App\Http\Controllers;

use App\Models\Vita10;
use Illuminate\Http\Request;

class Vita10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita10::all();
        return view('vita10.vita10',['datas' => $datas]);
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
        $datas = new Vita10();
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
     * @param  \App\Models\Vita10  $vita10
     * @return \Illuminate\Http\Response
     */
    public function show(Vita10 $vita10)
    {
        $datas = Vita10::all();
        return view('vita10.vita1Store',['datas' => $datas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita10  $vita10
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita10 $vita10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita10  $vita10
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita10 $vita10)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita10  $vita10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita10 $vita10)
    {
        //
    }
}
