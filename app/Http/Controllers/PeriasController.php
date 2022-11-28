<?php

namespace App\Http\Controllers;

use App\perias;
use Illuminate\Http\Request;

class PeriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_perias=\App\perias::all();
        return view('page.createdataperias',['data_perias'=>$data_perias]);
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
        $insert = perias::create([
            'nama_perias' => $request->nama_perias
        ]);

        if($insert)
        return redirect()->back()->with("success","Berhasil Menambah Data");
        else {
            return redirect()->back()->with("error","Gagal Menambah Data");
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\perias  $perias
     * @return \Illuminate\Http\Response
     */
    public function show(perias $perias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perias  $perias
     * @return \Illuminate\Http\Response
     */
    public function edit(perias $perias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perias  $perias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perias $perias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perias  $perias
     * @return \Illuminate\Http\Response
     */
    public function destroy(perias $perias)
    {
        //
    }
}
