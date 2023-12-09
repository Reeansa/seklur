<?php

namespace App\Http\Controllers;

use App\Models\Meninggal;
use App\Http\Requests\StoreMeninggalRequest;
use App\Http\Requests\UpdateMeninggalRequest;

class MeninggalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( 'dashboard.meninggal.index' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'dashboard.meninggal.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeninggalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Meninggal $meninggal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meninggal $meninggal)
    {
        return view( 'dashboard.meninggal.edit' );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeninggalRequest $request, Meninggal $meninggal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meninggal $meninggal)
    {
        //
    }
}
