<?php

namespace App\Http\Controllers;

use App\Models\Jawaban1;
use App\Http\Requests\StoreJawaban1Request;
use App\Http\Requests\UpdateJawaban1Request;
use Illuminate\Http\Request;

class Jawaban1Controller extends Controller
{
    public function simpanRadio(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'choice' => 'required', // Pastikan radio button dipilih
        ]);

        // Simpan data ke dalam database
        $jawaban1 = new Jawaban1(); // Ganti jawaban1 dengan model yang tepat
        $jawaban1->choice = $request->input('choice');
        $jawaban1->save();

        // Redirect atau lakukan operasi lainnya setelah penyimpanan data
        // return redirect()->back()->with('success', 'Data radio button berhasil disimpan!');
        return response()->json(['success' => true, 'message' => 'Data radio button berhasil disimpan!']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreJawaban1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJawaban1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jawaban1  $jawaban1
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban1 $jawaban1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jawaban1  $jawaban1
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban1 $jawaban1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJawaban1Request  $request
     * @param  \App\Models\Jawaban1  $jawaban1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJawaban1Request $request, Jawaban1 $jawaban1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jawaban1  $jawaban1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban1 $jawaban1)
    {
        //
    }
}
