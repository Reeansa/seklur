@extends('components.layout')
@section('title', 'Ubah Data Pindah')
@section('content')
    <div class="grid grid-cols-12 w-full h-screen">
        @include('components.sidebar')
        <div class="col-span-9 bg-slate-orange-200 p-5 space-y-20 bg-slate-200">
            @include('components.header')
            <form class="space-y-5 bg-white rounded-xl" action="{{ route('data-pindah.update', $data_pindah->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="bg-[#4DA8CA] p-5 rounded-xl items-center flex gap-2 rounded-xl">
                    <svg width="30" height="30" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.4184 1.63342C15.3517 1.56033 15.2709 1.5015 15.1809 1.46048C15.0909 1.41946 14.9935 1.3971 14.8945 1.39474C14.7956 1.39238 14.6973 1.41008 14.6054 1.44676C14.5135 1.48344 14.43 1.53835 14.3599 1.60818L13.752 2.21414L14.7872 3.24676L15.3849 2.65209C15.5209 2.51946 15.6003 2.33937 15.6066 2.1495C15.6128 1.95963 15.5454 1.7747 15.4184 1.63342Z"
                            fill="#675F5F" />
                        <path
                            d="M8.39242 11.1562H7.95182H6.90625H5.84375V10.0938V9.04818V8.60758L6.15586 8.29613L10.7425 3.71875H1.59375V15.4062H13.2812V6.25746L8.70387 10.8441L8.39242 11.1562Z"
                            fill="#675F5F" />
                        <path d="M13.2813 4.75322L14.3701 3.66217L13.3378 2.62988L12.2471 3.71861H13.2813V4.75322Z"
                            fill="#675F5F" />
                        <path d="M6.90625 10.0938H7.95182L13.2812 4.75336V3.71875H12.247L6.90625 9.04818V10.0938Z"
                            fill="#675F5F" />
                    </svg>

                    <h1 class="text-xl">Ubah Data</h1>
                </div>
                <div class="p-5 space-y-5">
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Nama</p>
                            <select name="nama" id="nama" class="w-3/4 border border-black py-2 px-4">
                                <option value="{{ $data_pindah->penduduk->id }}" class="hidden">{{ $data_pindah->penduduk->nama }}</option>
                                @foreach ($penduduk as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('nama')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Tanggal Pindah</p>
                            <input type="date" name="tanggal_pindah" id="tanggal_pindah" value="{{ $data_pindah->tanggal_pindah }}" class="w-3/4 border border-black py-2 px-4">
                        </div>
                        @error('tanggal_pindah')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex gap-2 items-center w-full justify-between">
                            <p>Alasan</p>
                            <input name="alasan" type="text" class="w-3/4 border border-black py-2 px-4"
                                value="{{ $data_pindah->alasan }}">
                        </div>
                        @error('alasan')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex items-center gap-5">
                        <button type="submit" class="bg-[#4DA8CA] p-2 rounded-lg">Simpan</button>
                        <a class="bg-black/20 p-2 rounded-lg" href="{{ route('data-pindah.index') }}">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
