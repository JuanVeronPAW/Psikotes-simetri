<?php

namespace App\Http\Controllers;

use App\Models\Subtes1;
use App\Http\Requests\StoreSubtes1Request;
use App\Http\Requests\UpdateSubtes1Request;

class Subtes1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data_subtes1 = Subtes1::all();
        $data_subtes1 = Subtes1::paginate(1);
        return view("subtes.subtes1", compact("data_subtes1"));
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
     * @param  \App\Http\Requests\StoreSubtes1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubtes1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subtes1  $subtes1
     * @return \Illuminate\Http\Response
     */
    public function show(Subtes1 $subtes1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subtes1  $subtes1
     * @return \Illuminate\Http\Response
     */
    public function edit(Subtes1 $subtes1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubtes1Request  $request
     * @param  \App\Models\Subtes1  $subtes1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubtes1Request $request, Subtes1 $subtes1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtes1  $subtes1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtes1 $subtes1)
    {
        //
    }
}
