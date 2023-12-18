<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PrintController extends Controller
{
    public function index($type)
    {
        if ($type === 'penduduk') {
            $data = Penduduk::all();

            return view('dashboard.penduduk.print', compact('data'));
        }
    }
}
