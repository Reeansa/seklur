<div class="col-span-3 space-y-5">
    <div class="flex items-center justify-center gap-10 bg-[#4DA8CA] py-5">
        <img src="{{ asset('images/logo.png') }}" alt="" class="h-10 w-10">
        <h1 class="text-2xl font-semibold">Kelurahan Bantarsoka</h1>
    </div>
    <div class="px-10 space-y-10">
        <div class="space-y-5">
            <div class="flex items-center w-full gap-5 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="text-lg">Farah Zafirah</p>
                    <p class="bg-green-700 text-xs w-min px-2 text-white rounded-2xl">Administrator</p>
                </div>
            </div>
            <a href="{{ route('dashboard') }}" class="flex items-center w-full gap-5 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-lg">Dashboard</p>
            </a>
            <div id="kelola-data" class="space-y-3 cursor-pointer">
                <div class="flex items-center w-full gap-5 justify-between">
                    <div class="gap-5 flex relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-lg">Kelola Data</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div id="kelola-data-modal" class="pl-5 space-y-2 hidden">
                    <a href="{{ route('data-penduduk') }}" class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full bg-black"></div>
                        <p>Data Penduduk</p>
                    </a>
                    <div class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full border border-black"></div>
                        <p>Data Kartu Keluarga</p>
                    </div>
                </div>
            </div>
            <div id="sirkulasi-penduduk" class="space-y-3 cursor-pointer">
                <div class="flex items-center w-full gap-5 cursor-pointer justify-between">
                    <div class="gap-5 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-lg">Sirkulasi Penduduk</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <div id="sirkulasi-penduduk-modal" class="pl-5 space-y-2 hidden">
                    <div class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full bg-black"></div>
                        <p>Data Penduduk</p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full border border-black"></div>
                        <p>Data Kartu Keluarga</p>
                    </div>
                </div>
            </div>
            <div id="kelola-laporan" class="space-y-3 cursor-pointer">
                <div class="flex items-center w-full justify-between">
                    <div class="gap-5 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-lg">Kelola Laporan</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <div id="kelola-laporan-modal" class="pl-5 space-y-2 hidden">
                    <div class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full bg-black"></div>
                        <p>Data Penduduk</p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="h-5 w-5 rounded-full border border-black"></div>
                        <p>Data Kartu Keluarga</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-5">
            <div class="flex items-center w-full gap-5 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-lg">Kelola Admin</p>
            </div>
            <div class="flex items-center w-full gap-5 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-lg">Logout</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#kelola-data").click(function() {
                $("#kelola-data-modal").toggleClass("hidden");
            });

            $("#sirkulasi-penduduk").click(function() {
                $("#sirkulasi-penduduk-modal").toggleClass("hidden");
            });

            $("#kelola-laporan").click(function() {
                $("#kelola-laporan-modal").toggleClass("hidden");
            });
        });
    </script>
@endpush
