@extends('components.layout')

@section('content')
    <div class="grid grid-cols-12 w-full h-screen">
        @include('components.sidebar')
        <div class="col-span-9 bg-slate-orange-200 p-5 space-y-20 bg-slate-200">
            <div class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">Sistem Informasi Data Kependudukan Desa Bantarsoka</p>
            </div>

            <form class="space-y-5 bg-white rounded-xl" action="{{ route('data-penduduk.store') }}" method="POST">
                @csrf
                <div class="bg-[#4DA8CA] py-2 px-4 rounded-xl items-center flex gap-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Tambah Data</p>
                </div>
                <div class="p-5 space-y-5">
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>NIK</p>
                            <input name="nik" type="number" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('nik')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Nama</p>
                            <input name="nama" type="text" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('nama')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>TTL</p>
                            <div class="w-3/4 flex gap-3">
                                <input name="tempat_lahir" type="text" class="w-1/2 border border-black py-2 px-4">
                                <input name="tanggal_lahir" type="date" class="w-1/2 border border-black py-2 px-4">
                            </div>
                        </div>
                        @error('tempat_lahir')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        @error('tanggal_lahir')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Jenis Kelamin</p>
                            <select name="jk" class="w-3/4 border border-black py-2 px-4">
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>
                        @error('jk')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Alamat</p>
                            <input name="alamat" type="text" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('alamat')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Agama</p>
                            <input name="agama" type="text" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('agama')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Status Perkawinan</p>
                            <input name="status_perkawinan" type="text" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('status_perkawinan')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Pekerjaan</p>
                            <input name="pekerjaan" type="text" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('pekerjaan')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-5">
                        <button type="submit" class="bg-[#4DA8CA] p-2 rounded-lg">Simpan</button>
                        <button class="bg-black/20 p-2 rounded-lg">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
