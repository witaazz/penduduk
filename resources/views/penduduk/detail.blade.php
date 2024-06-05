@extends('template.layout')

@section('title')
Data Penduduk
@endsection

@section('content')

<h1 class="text-2xl font-bold">Detail Penduduk</h1>
<!-- <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p> -->
<a href="{{ route('penduduk') }}"><button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali </button></a>

<div class="bg-white-100 dark:bg-white-100">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white  p-8 rounded-lg shadow-md border ">
            <div class="flex justify-center">NIK :</div>
            <div class="text-2xl font-bold text-gray-800 mb-1 flex justify-center">{{ $penduduk->nik }}</div>

            No KK : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nokk }}</div>
            Nama Lengkap : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_lengkap }}</div>
            Tempat Lahir : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->tempat_lahir }}</div>
            Tanggal Lahir : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->tanggal_lahir }}</div>
            Jenis Kelamin : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->jenis_kelamin }}</div>
            Agama : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->agama }}</div>
            Golongan Darah : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->goldar }}</div>
            Pendidikan Terakhir : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->pendidikan_terakhir }}</div>
            Status Pernikahan : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->status_pernikahan }}</div>
            Pekerjaan : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_pekerjaan }}</div>
            Kelurahan : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_kelurahan }}</div>
            Kecamatan : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_kecamatan }}</div>
            Kabupaten : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_kabupaten }}</div>
            Provinsi : <div class="text-2l font-bold text-gray-800 mb-1">{{ $penduduk->nama_provinsi }}</div>

        </div>
    </div>
</div>

@endsection