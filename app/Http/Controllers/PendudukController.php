<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();
        // dd($data);
        return view('dashboard.penduduk.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penduduks,nik',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('data-penduduk')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Penduduk::find($id);
        return view('dashboard.penduduk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|unique:penduduks,nik,' . $id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
        ]);

        Penduduk::find($id)->update($request->all());

        return redirect()->route('data-penduduk')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Penduduk::find($id)->delete();

        return redirect()->route('data-penduduk')->with('success', 'Data berhasil dihapus');
    }
}
