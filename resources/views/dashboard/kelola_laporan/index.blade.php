@extends('components.layout')
@section('title', 'Kelola Laporan')
@section('content')
    <div class="grid grid-cols-12 w-full h-screen">
        @include('components.sidebar')
        <div class="col-span-9 bg-slate-orange-200 p-5 space-y-20 bg-slate-200">
            @include('components.header')
            @if (session('success'))
                <div class="absolute top-0 bg-green-300 text-green-700 rounded p-3">
                    <h1> {{ session('success') }} </h1>
                </div>
            @elseif(session('error'))
                <div class="absolute top-0 bg-red-300 text-red-700 rounded p-3">
                    <h1> {{ session('error') }} </h1>
                </div>
            @endif
            <div class="space-y-5 bg-white rounded-xl">
                <div class="bg-[#4DA8CA] p-5 rounded-xl items-center flex gap-1 rounded-xl">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.125 16.0312C1.125 16.255 1.21389 16.4696 1.37213 16.6279C1.53036 16.7861 1.74497 16.875 1.96875 16.875H16.0312C16.255 16.875 16.4696 16.7861 16.6279 16.6279C16.7861 16.4696 16.875 16.255 16.875 16.0312V6.75H1.125V16.0312Z"
                            fill="#675F5F" />
                        <path
                            d="M16.875 3.08566C16.8749 2.97528 16.8529 2.86601 16.8103 2.76416C16.7678 2.6623 16.7055 2.56988 16.6271 2.4922C16.5486 2.41452 16.4556 2.35313 16.3534 2.31156C16.2511 2.26999 16.1416 2.24907 16.0312 2.25H14.0653V1.125H12.3778V2.25H5.62219V1.125H3.93469V2.25H1.96875C1.85837 2.24907 1.7489 2.26999 1.64664 2.31156C1.54438 2.35313 1.45135 2.41452 1.37292 2.4922C1.2945 2.56988 1.23221 2.6623 1.18966 2.76416C1.14711 2.86601 1.12514 2.97528 1.125 3.08566V5.0625H16.875V3.08566Z"
                            fill="#675F5F" />
                    </svg>

                    <h1 class="text-xl">Kelola Laporan</h1>
                </div>
                <div class="p-5">
                    <a href="{{ route('data-pindah.create') }}"
                        class="flex gap-1 items-center p-1 bg-[#4DA8CA] w-min rounded-lg whitespace-nowrap">
                        <svg class="w-6 h-6" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.64941 2.25V1.3125C9.64941 1.26277 9.62966 1.21508 9.5945 1.17992C9.55933 1.14475 9.51164 1.125 9.46191 1.125H3.08691C3.03719 1.125 2.98949 1.14475 2.95433 1.17992C2.91917 1.21508 2.89941 1.26277 2.89941 1.3125V2.25"
                                fill="#675F5F" />
                            <path
                                d="M9.83691 2.625H2.71191C2.36382 2.625 2.02998 2.76328 1.78384 3.00942C1.53769 3.25556 1.39941 3.5894 1.39941 3.9375V8.8125C1.39941 8.86223 1.41917 8.90992 1.45433 8.94508C1.48949 8.98025 1.53719 9 1.58691 9H2.89941V10.6875C2.89941 10.7372 2.91917 10.7849 2.95433 10.8201C2.98949 10.8552 3.03719 10.875 3.08691 10.875H9.46191C9.51164 10.875 9.55933 10.8552 9.5945 10.8201C9.62966 10.7849 9.64941 10.7372 9.64941 10.6875V9H10.9619C11.0116 9 11.0593 8.98025 11.0945 8.94508C11.1297 8.90992 11.1494 8.86223 11.1494 8.8125V3.9375C11.1494 3.5894 11.0111 3.25556 10.765 3.00942C10.5189 2.76328 10.185 2.625 9.83691 2.625ZM8.71191 9.84375C8.71191 9.86861 8.70204 9.89246 8.68446 9.91004C8.66687 9.92762 8.64303 9.9375 8.61816 9.9375H3.93066C3.9058 9.9375 3.88195 9.92762 3.86437 9.91004C3.84679 9.89246 3.83691 9.86861 3.83691 9.84375V6.28125C3.83691 6.25639 3.84679 6.23254 3.86437 6.21496C3.88195 6.19738 3.9058 6.1875 3.93066 6.1875H8.61816C8.64303 6.1875 8.66687 6.19738 8.68446 6.21496C8.70204 6.23254 8.71191 6.25639 8.71191 6.28125V9.84375ZM9.50879 4.87313C9.39406 4.88235 9.27927 4.85615 9.1799 4.79808C9.08052 4.74 9.00136 4.65284 8.95309 4.54835C8.90481 4.44387 8.88975 4.32709 8.90994 4.21378C8.93013 4.10047 8.98459 3.99607 9.06598 3.91469C9.14736 3.8333 9.25175 3.77884 9.36507 3.75865C9.47838 3.73847 9.59516 3.75353 9.69964 3.8018C9.80413 3.85007 9.89129 3.92924 9.94937 4.02861C10.0074 4.12798 10.0336 4.24277 10.0244 4.3575C10.0137 4.49068 9.95595 4.6157 9.86147 4.71018C9.76699 4.80466 9.64197 4.86242 9.50879 4.87313Z"
                                fill="#675F5F" />
                        </svg>
                        <p>Print</p>
                    </a>

                    <div class="flex justify-end">
                        <div class="flex gap-2 mx-2">
                            <p>Search:</p>
                            <input type="text" class="border border-black rounded-sm">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex items-center justify-between">
                                            <label for="desa" class="w-28">Desa</label>
                                            <label for="desa" class="w-auto">:</label>
                                            <input type="text" name="desa" id="desa" value="Bantarsoka"
                                                class="w-11/12 p-2 mx-2 border border-black" disabled>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <label for="kecamatan" class="w-28">Kecamatan</label>
                                            <label for="kecamatan" class="w-auto">:</label>
                                            <input type="text" name="kecamatan" id="kecamatan" value="Bantarsoka"
                                                class="w-11/12 p-2 mx-2 border border-black" disabled>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="flex w-full items-center">
                                                <label for="tahun" class="w-28">Tahun</label>
                                                <label for="tahun" class="w-auto">:</label>
                                                <select name="tahun" id="tahun"
                                                    class="w-8/12 p-2 mx-2 border border-black">
                                                    <option value="" class="hidden">pilih Tahun</option>
                                                </select>
                                            </div>
                                            <div class="flex w-full items-center justify-evenly">
                                                <label for="tahun" class="">Bulan</label>
                                                <label for="tahun" class="w-auto">:</label>
                                                <select name="tahun" id="tahun"
                                                    class="w-8/12 p-2 mx-2 border border-black">
                                                    <option value="" class="hidden">pilih Bulan</option>
                                                </select>
                                            </div>
                                            <div class="flex w-full items-center justify-between">
                                                <label for="tahun" class="">Keterangan</label>
                                                <label for="tahun" class="w-auto">:</label>
                                                <select name="tahun" id="tahun"
                                                    class="w-8/12 p-2 mx-2 border border-black">
                                                    <option value="" class="hidden">Pilih Keterangan</option>
                                                    <option value="">Data Penduduk</option>
                                                    <option value="">Data Kartu Keluarga</option>
                                                    <option value="">Data Lahir</option>
                                                    <option value="">Data Meninggal</option>
                                                    <option value="">Data Pendatang</option>
                                                    <option value="">Data Pindah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <table
                                        class="min-w-full border border-[#858383] text-center text-sm font-light dark:border-neutral-500 mt-10">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    No
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    NIK
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Nama
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Tanggal
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Keterangan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-[#ECECEC]">
                                            <tr class="border-b dark:border-neutral-500">
                                                <td
                                                    class="whitespace-nowrap border-r px-4 py-2 font-medium dark:border-neutral-500">
                                                    1
                                                </td>
                                                <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                    asdasdasd
                                                </td>
                                                <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                    asdasdasd
                                                </td>
                                                <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                    asdasdasd
                                                </td>
                                                <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                    asdasdasd
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- {{ $data->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
