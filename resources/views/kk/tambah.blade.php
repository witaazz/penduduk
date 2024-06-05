@extends('template.layout')

@section('title')
Tambah Data
@endsection

@section('content')

<h1 class="text-2xl font-bold">Tambah Data</h1>
<a href="{{ route('kartukeluarga') }}"><button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali </button></a>

<div class="bg-white-100 dark:bg-white-100">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white  p-8 rounded-lg shadow-md border ">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Data KK</h1>
            <form method="POST" action="{{ route('createkartukeluarga') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="nokk" class="mb-3 block text-base font-medium text-[#07074D]">
                        No KK
                    </label>
                    <input type="text" name="nokk" id="nokk" value="{{ old('nokk') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    <span>
                        <p class="text-red-500">{{ $errors->first('nokk') }}</p>
                    </span>
                </div>
                <div class="mb-5">
                    <label for="foto_kk" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fotofoto_kk
                    </label>
                    <input type="file" name="foto_kk" id="foto_kk" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    <span>
                        <p class="text-red-500">{{ $errors->first('foto_kk') }}</p>
                    </span>
                </div>

                <div>
                    <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection