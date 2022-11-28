<?php

namespace App\Http\Controllers;

use App\jenisriasan;
use Illuminate\Http\Request;

class JenisriasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_rias=\App\jenisriasan::all();

        return view('page.createdatarias',['data_rias'=>$data_rias]);
    }
    public function order()
    {
        $data_rias=\App\jenisriasan::all();
        $nama_perias=\App\Perias::all();
        $ordermenu=\App\order::all();
        return view('page.order',['data_rias'=>$data_rias,'nama_perias'=>$nama_perias,'ordermenu'=>$ordermenu]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = jenisriasan::create([
            'jenis_rias' => $request->jenis_rias
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
     * @param  \App\jenisriasan  $jenisriasan
     * @return \Illuminate\Http\Response
     */
    public function show(jenisriasan $jenisriasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jenisriasan  $jenisriasan
     * @return \Illuminate\Http\Response
     */
    public function edit(jenisriasan $jenisriasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jenisriasan  $jenisriasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisriasan $jenisriasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jenisriasan  $jenisriasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenisriasan $jenisriasan)
    {
        //
    }
}
