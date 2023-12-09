<?php

namespace App\Http\Controllers;

use App\Models\Lahir;
use App\Http\Requests\StoreLahirRequest;
use App\Http\Requests\UpdateLahirRequest;

class LahirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lahir::paginate(10);
        return view('dashboard.lahir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.lahir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLahirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lahir $lahir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lahir $lahir)
    {
        return view('dashboard.lahir.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLahirRequest $request, Lahir $lahir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lahir $lahir)
    {
        //
    }
}
