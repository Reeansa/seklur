@extends('components.layout')

@section('content')
    <table class="min-w-full border border-[#858383] text-center text-sm font-light dark:border-neutral-500">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    No
                </th>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    No KK
                </th>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    Kepala Keluarga
                </th>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    Alamat
                </th>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    Anggota KK
                </th>
                <th scope="col" class="border-r px-4 py-2 dark:border-neutral-500">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="bg-[#ECECEC]">
            @foreach ($data as $d)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap border-r px-4 py-2 font-medium dark:border-neutral-500">
                        {{ $loop->iteration }}
                    </td>
                    <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                        {{ $d->no_kk }}
                    </td>
                    <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                        {{ $d->penduduk->nama }}
                    </td>
                    <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                        {{ $d->alamat }}
                    </td>
                    <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500">
                        <a href="{{ route('data-kartu-keluarga.anggota-kk', $d->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#675F5F" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#675F5F" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </a>
                    </td>
                    <td class="whitespace-nowrap border-r px-4 py-2 dark:border-neutral-500 flex gap-3 justify-center">
                        <a href={{ route('data-kartu-keluarga.edit', $d->id) }} class="cursor-pointer">
                            <svg class="w-6 h-6" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        </a>
                        <form action="{{ route('data-kartu-keluarga.destroy', $d->id) }}" class="cursor-pointer"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
