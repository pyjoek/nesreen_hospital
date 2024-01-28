<?php

namespace App\Http\Controllers;

use App\Models\Vita2;
use Illuminate\Http\Request;

class Vita2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita2::all();
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
     * @param  \App\Models\Vita2  $vita2
     * @return \Illuminate\Http\Response
     */
    public function show(Vita2 $vita2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita2  $vita2
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita2 $vita2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita2  $vita2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita2 $vita2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita2  $vita2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita2 $vita2)
    {
        //
    }
}
