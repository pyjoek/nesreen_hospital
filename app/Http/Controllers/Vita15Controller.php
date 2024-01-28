<?php

namespace App\Http\Controllers;

use App\Models\Vita15;
use Illuminate\Http\Request;

class Vita15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita15::all();
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
     * @param  \App\Models\Vita15  $vita15
     * @return \Illuminate\Http\Response
     */
    public function show(Vita15 $vita15)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita15  $vita15
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita15 $vita15)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita15  $vita15
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita15 $vita15)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita15  $vita15
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita15 $vita15)
    {
        //
    }
}
