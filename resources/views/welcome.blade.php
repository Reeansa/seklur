@extends('components.layout')

@section('content')
    <div class="flex items-center justify-center h-screen w-full">
        <div class="h-fit w-1/3 rounded-xl bg-slate-300 p-10 space-y-5">
            <div class="flex justify-center">
                <img src="{{ asset('images/logo.png') }}" alt="" class="h-40 w-40">
            </div>
            <div class="text-center">
                <h1 class="text-2xl font-bold">Sistem Data Kependudukan</h1>
                <p>Kelurahan Bantarsoka</p>
            </div>
            <div class="flex flex-col w-full space-y-5">
                <input type="text" class="border border-black w-full py-2 px-3" placeholder="Username">
                <input type="text" class="border border-black w-full py-2 px-3" placeholder="Password">
                <a href="{{ route('dashboard') }}"
                    class="w-full py-2 border border-black bg-[#4DA8CA] text-center">Login</a>
            </div>
        </div>
    </div>
@endsection
