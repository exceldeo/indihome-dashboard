<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::orderBy('created_at', 'DESC')->get();
        return view('dashboard.pelanggan.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelanggan.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kodePelanggan = "";
        do {
            $kodePelanggan = "MYIR-".mt_rand( 1000000000, 9999999999 );
         } while ( Pelanggan::where( 'kodePelanggan', $kodePelanggan )->exists() );
        $pelanggan = Pelanggan::create([
            'kodePelanggan' => $kodePelanggan,
            'nama' => $request->nama, 
            'noTelp' => $request->noTelp, 
            'email' => $request->email, 
            'paket' => $request->paket, 
            'alamat' => $request->alamat, 
            'kodeSales' => "MKTCWN", 
            'statusPemasangan' => 0, 
        ]);

        $pelanggan->save();

        return redirect()->route('admin.pelanggan.create')->with('message', 'Pelanggan berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('dashboard.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);

        $pelanggan->statusPemasangan = $request->statusPemasangan;

        $pelanggan->save();

        return redirect()->route('admin.pelanggan.index')->with('message', 'Status Pemasangan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        //
    }
}
