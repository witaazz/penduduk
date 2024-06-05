@extends('template.layout')

@section('title')
Tambah Data
@endsection

@section('content')

<h1 class="text-2xl font-bold">Tambah Data</h1>
<!-- <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p> -->
<a href="{{ route('pekerjaan') }}"><button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali </button></a>

<div class="bg-white-100 dark:bg-white-200">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Data Pekerjaan</h1>
            <form action="{{ route('createpekerjaan') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="sektor" class="block text-gray-700 dark:text-white mb-1">Sektor</label>
                            <select id="sektor" name="sektor" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                <option value="---" disabled selected>Sektor</option>
                                @foreach ($sektor as $i=>$a)
                                <option value="{{ $a->id }}">{{ $a->sektor }}</option>
                                @endforeach
                            </select>
                            <span>
                                <p class="text-red-500">{{ $errors->first('sektor') }}</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="nama_pekerjaan" class="block text-gray-700 dark:text-white mb-1">Nama Pekerjaan</label>
                            <input type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            <span>
                                <p class="text-red-500">{{ $errors->first('nama_pekerjaan') }}</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection