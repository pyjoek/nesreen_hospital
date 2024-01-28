<?php

namespace App\Http\Controllers;

use App\Models\Vita5;
use Illuminate\Http\Request;

class Vita5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita5::all();
        return view('vita1.vita1',['datas' => $datas]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vita5  $vita5
     * @return \Illuminate\Http\Response
     */
    public function show(Vita5 $vita5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita5  $vita5
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita5 $vita5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita5  $vita5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita5 $vita5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita5  $vita5
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita5 $vita5)
    {
        //
    }
}
