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

            <div class="space-y-5 bg-white rounded-xl">
                <div class="bg-[#4DA8CA] py-2 px-4 rounded-xl items-center flex gap-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Data Penduduk</p>
                </div>
                <div class="p-5">
                    <a href="{{ route('data-penduduk.create') }}"
                        class="flex gap-2 items-center p-1 bg-[#4DA8CA] w-min rounded-lg whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Tambah Data</p>
                    </a>

                    <div class="flex justify-end">
                        <div class="flex gap-2">
                            <p>Search:</p>
                            <input type="text" class="border border-black rounded-lg">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    No
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Nik
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Nama
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    JK
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Alamat
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    No KK
                                                </th>
                                                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 font-medium dark:border-neutral-500">
                                                        1
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                        {{ $d->nik }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                        {{ $d->nama }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                        {{ $d->jk }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                        {{ $d->alamat }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                                                        -
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500 flex gap-3 justify-center">
                                                        <div class="cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <a href={{ route('data-penduduk.edit', $d->id) }}
                                                            class="cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                                <path
                                                                    d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{ route('data-penduduk.destroy', $d->id) }}"
                                                            class="cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
