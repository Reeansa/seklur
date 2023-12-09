<?php

namespace App\Http\Controllers;

use App\Models\KelolaLaporan;
use App\Http\Requests\StoreKelolaLaporanRequest;
use App\Http\Requests\UpdateKelolaLaporanRequest;

class KelolaLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( 'dashboard.kelola_laporan.index' );
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
    public function show(KelolaLaporan $kelolaLaporan)
    {
        //
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
