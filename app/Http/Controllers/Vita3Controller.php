<?php

namespace App\Http\Controllers;

use App\Models\Vita3;
use Illuminate\Http\Request;

class Vita3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vita3::all();
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
     * @param  \App\Models\Vita3  $vita3
     * @return \Illuminate\Http\Response
     */
    public function show(Vita3 $vita3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vita3  $vita3
     * @return \Illuminate\Http\Response
     */
    public function edit(Vita3 $vita3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vita3  $vita3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vita3 $vita3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vita3  $vita3
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vita3 $vita3)
    {
        //
    }
}
