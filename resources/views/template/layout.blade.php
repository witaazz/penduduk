<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="flex h-screen bg-gray-100">
        <!-- sidebar -->
        <div class="hidden md:flex flex-col w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <span class="text-white font-bold uppercase">Aplikasi Kependudukan</span>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800">
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Home
                    </a>
                    <a href="{{ route('penduduk') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7.963 7.963 0 0112 15c1.926 0 3.686.684 5.121 1.804M15 12a3 3 0 11-6 0 3 3 0 016 0zM19.071 4.929a10 10 0 11-14.142 0 10 10 0 0114.142 0z" />
                        </svg>
                        Data Penduduk
                    </a>
                    <a href="{{ route('kartukeluarga') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Data KK
                    </a>
                    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                    <a href="" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        SETTINGS
                    </a>
                    <a href="{{ route('pekerjaan') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">

                        Data Pekerjaan
                    </a>
                    <a href="{{ route('sektor') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">

                        Data Sektor Pekerjaan
                    </a>

                    <a href="{{ route('kelurahan') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">

                        Data Kelurahan
                    </a>
                    <a href="{{ route('kecamatan') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">

                        Data Kecamatan
                    </a>
                    <a href="{{ route('kabupaten') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">

                        Data Kabupaten
                    </a>
                    <a href="{{ route('provinsi') }}" class="flex items-center px-4 py-2 ml-3 mt-2 text-gray-100 hover:bg-gray-700">
                        Data Provinsi
                    </a>
                    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                    <a href="{{ route('keluar') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="16 17 21 12 16 7"></polyline>
                            <line stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Logout
                    </a>

                </nav>
            </div>
        </div>

        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
                <div class="flex items-center px-4">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <form action="{{ route('cari') }}" method="GET" id="searchForm">
                        @csrf
                        <input name="cari" class="mx-4 w-full border rounded-md px-4 py-2" type="text" placeholder="Cari NIK atau Nama Penduduk" value="{{ request('cari') }}">
                    </form>

                    <script>
                        document.querySelector('input[name="cari"]').addEventListener('input', function() {
                            document.getElementById('searchForm').submit();
                        });
                    </script>

                </div>
                <div class="flex items-center pr-4">

                    <button class="flex items-center text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l-7-7 7-7m5 14l7-7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>