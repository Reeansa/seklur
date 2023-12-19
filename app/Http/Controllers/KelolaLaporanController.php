<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\KelolaLaporan;
use App\Http\Requests\StoreKelolaLaporanRequest;
use App\Http\Requests\UpdateKelolaLaporanRequest;
use App\Models\Lahir;
use App\Models\Meninggal;
use App\Models\Pendatang;
use App\Models\Penduduk;
use App\Models\Pindah;

class KelolaLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( 'dashboard.kelola_laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelolaLaporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($jenis)
    {
        if ($jenis === 'data-penduduk') {
            $data = Penduduk::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.penduduk', [ 'data' => $data ] )->getContent();
        } elseif ($jenis === 'data-kartu-keluarga') {
            $data = KartuKeluarga::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.kartuKeluarga', [ 'data' => $data ] )->getContent();
        } elseif ($jenis === 'data-lahir') {
            $data = Lahir::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.lahir', [ 'data' => $data ] )->getContent();
        } elseif ($jenis === 'data-meninggal') {
            $data = Meninggal::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.meninggal', [ 'data' => $data ] )->getContent();
        } elseif ($jenis === 'data-pendatang') {
            $data = Pendatang::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.pendatang', [ 'data' => $data ] )->getContent();
        } elseif ($jenis === 'data-pindah') {
            $data = Pindah::latest()->filter( request( [ 'search' ] ) )->get();
            return response()->view( 'dashboard.kelola_laporan.pages.pindah', [ 'data' => $data ] )->getContent();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelolaLaporan $kelolaLaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelolaLaporanRequest $request, KelolaLaporan $kelolaLaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelolaLaporan $kelolaLaporan)
    {
        //
    }
}
