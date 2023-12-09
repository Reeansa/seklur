<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Http\Requests\StoreKartuKeluargaRequest;
use App\Http\Requests\UpdateKartuKeluargaRequest;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KartuKeluarga::paginate(10);
        return view('dashboard.kartu_keluarga.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kartu_keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'no_kk' => ['required', 'unique:kartu_keluargas,no_kk'],
            'nama' => ['required'],
            'alamat' => ['required'],
            'kabupaten' => ['required'],
            'provinsi' => ['required'],
        ] );

        $data = [
            'no_kk' => $request->no_kk,
            'kepala_keluarga' => $request->nama,
            'alamat' => $request->alamat,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
        ];

        KartuKeluarga::create( $data );

        return redirect()->route('data-kartu-keluarga.create')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KartuKeluarga $kartuKeluarga)
    {
        return view( 'dashboard.kartu_keluarga.edit', compact( 'kartuKeluarga' ) );
    }

    public function kartuKeluargaAnggota(KartuKeluarga $kartuKeluarga) {
        return view( 'dashboard.kartu_keluarga.anggota', compact( 'kartuKeluarga' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KartuKeluarga $kartuKeluarga)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KartuKeluarga $kartuKeluarga)
    {
        $kartuKeluarga->delete();
        return redirect()->route('data-kartu-keluarga')->with('success', 'Data berhasil dihapus');
    }
}
