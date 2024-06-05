@extends('template.layout')

@section('title')
Tambah Data
@endsection

@section('content')

<h1 class="text-2xl font-bold">Tambah Data</h1>
<a href="{{ route('penduduk') }}"><button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali </button></a>

<div class="bg-white-100 dark:bg-white-100">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white  p-8 rounded-lg shadow-md border ">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Data Penduduk</h1>
            <form method="POST" action="{{ route('creatependuduk') }}">
                @csrf
                <div class="mb-5">
                    <label for="nik" class="mb-3 block text-base font-medium text-[#07074D]">
                        NIK
                    </label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    <span>
                        <p class="text-red-500">{{ $errors->first('nik') }}</p>
                    </span>
                </div>
                <div class="mb-5">
                    <label for="kk" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nomor Kartu Keluarga
                    </label>
                    <!-- <input type="text" name="nokk" id="nokk" value="{{ old('nokk') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" /> -->
                    <select name="nokk" id="nokk" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="---" disabled selected>Nomor KK</option>
                        <option value="-">-</option>
                        @foreach ($kk as $i=>$a)
                        <option value="{{ $a->nokk }}">{{ $a->nokk }}</option>
                        @endforeach
                    </select>
                    <span>
                        <p class="text-red-500">{{ $errors->first('nokk') }}</p>
                    </span>
                </div>
                <div class="mb-5">
                    <label for="nama_lengkap" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    <span>
                        <p class="text-red-500">{{ $errors->first('nama_lengkap') }}</p>
                    </span>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="tempat_lahir" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tempat Lahir
                            </label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <span>
                                <p class="text-red-500">{{ $errors->first('tempat_lahir') }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="tanggal_lahir" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tanggal Lahir
                            </label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <span>
                                <p class="text-red-500">{{ $errors->first('tanggal_lahir') }}</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="jenis_kelamin" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jenis Kelamin
                    </label>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" @if (old('jenis_kelamin')=='Laki-laki' ) checked @endif class="font-medium text-[#6B7280]" /> Laki-laki
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" @if (old('jenis_kelamin')=='Perempuan' ) checked @endif class="ml-5 font-medium text-[#6B7280]" /> Perempuan
                    <span>
                        <p class="text-red-500">{{ $errors->first('jenis_kelamin') }}</p>
                    </span>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="agama" class="mb-3 block text-base font-medium text-[#07074D]">
                                Agama
                            </label>
                            <select name="agama" id="agama" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="---" disabled selected>Agama</option>
                                <option value="Islam" @if (old('agama')=='Islam' ) selected @endif>Islam</option>
                                <option value="Khatolik" @if (old('agama')=='Khatolik' ) selected @endif>Khatolik</option>
                                <option value="Protestan" @if (old('agama')=='Protestan' ) selected @endif>Protestan</option>
                                <option value="Hindu" @if (old('agama')=='Hindu' ) selected @endif>Hindu</option>
                                <option value="Buddha" @if (old('agama')=='Buddha' ) selected @endif>Buddha</option>
                                <option value="Konghucu" @if (old('agama')=='Konghucu' ) selected @endif>Konghucu</option>
                            </select>
                            <span>
                                <p class="text-red-500">{{ $errors->first('agama') }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="goldar" class="mb-3 block text-base font-medium text-[#07074D]">
                                Golongan Darah
                            </label>
                            <select name="goldar" id="goldar" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="---" disabled selected>Golongan Darah</option>
                                <option value="A" @if (old('goldar')=='A' ) selected @endif>A</option>
                                <option value="B" @if (old('goldar')=='B' ) selected @endif>B</option>
                                <option value="O" @if (old('goldar')=='O' ) selected @endif>O</option>
                                <option value="AB" @if (old('goldar')=='AB' ) selected @endif>AB</option>
                                <option value="Tidak Tahu" @if (old('goldar')=='Tidak Tahu' ) selected @endif>Tidak Tahu</option>
                            </select>
                            <span>
                                <p class="text-red-500">{{ $errors->first('goldar') }}</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="pendidikan_terakhir" class="mb-3 block text-base font-medium text-[#07074D]">
                                Pendidikan Terakhir
                            </label>
                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="---" disabled selected>Pendidikan Terakhir</option>
                                <option value="SD" @if (old('pendidikan_terakhir')=='SD' ) selected @endif>SD</option>
                                <option value="SMP" @if (old('pendidikan_terakhir')=='SMP' ) selected @endif>SMP</option>
                                <option value="SMA" @if (old('pendidikan_terakhir')=='SMA' ) selected @endif>SMA</option>
                                <option value="Diploma" @if (old('pendidikan_terakhir')=='Diploma' ) selected @endif>Diploma</option>
                                <option value="Strata 1" @if (old('pendidikan_terakhir')=='Strata 1' ) selected @endif>Strata 1</option>
                                <option value="Strata 2" @if (old('pendidikan_terakhir')=='Strata 2' ) selected @endif>Strata 2</option>
                                <option value="Strata 3" @if (old('pendidikan_terakhir')=='Strata 3' ) selected @endif>Strata 3</option>
                            </select>
                            <span>
                                <p class="text-red-500">{{ $errors->first('pendidikan_terakhir') }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="pekerjaan" class="mb-3 block text-base font-medium text-[#07074D]">
                                Pekerjaan
                            </label>
                            <select name="pekerjaan" id="pekerjaan" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="---" disabled selected>Pekerjaan</option>
                                @foreach ($pekerjaan as $i=>$a)
                                <option value="{{ $a->id }}">{{ $a->nama_pekerjaan }}</option>
                                @endforeach
                            </select>
                            <span>
                                <p class="text-red-500">{{ $errors->first('pekerjaan') }}</p>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="mb-5">
                    <label for="status_pernikahan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Status Pernikahan
                    </label>
                    <select name="status_pernikahan" id="status_pernikahan" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="---" disabled selected>Status Pernikahan</option>
                        <option value="Menikah" @if (old('status_pernikahan')=='Menikah' ) selected @endif>Menikah</option>
                        <option value="Tidak Menikah" @if (old('status_pernikahan')=='Tidak Menikah' ) selected @endif>Tidak Menikah</option>
                    </select>
                    <span>
                        <p class="text-red-500">{{ $errors->first('status_pernikahan') }}</p>
                    </span>
                </div>

                <div class="mb-5 pt-3">
                    <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                        Alamat
                    </label>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_provinsi" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Provinsi</option>
                                    @foreach ($provinsi as $i=>$a)
                                    <option value="{{ $a->id }}">{{ $a->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                                <span>
                                    <p class="text-red-500">{{ $errors->first('id_provinsi') }}</p>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kabupaten" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kabupaten/Kota</option>
                                    @foreach ($kabupaten as $i=>$a)
                                    <option value="{{ $a->id }}">{{ $a->nama_kabupaten }}</option>
                                    @endforeach
                                </select>
                                <span>
                                    <p class="text-red-500">{{ $errors->first('id_kabupaten') }}</p>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kecamatan" id="id_kecamatan" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kecamatan</option>
                                    @foreach ($kecamatan as $i=>$a)
                                    <option value="{{ $a->id }}">{{ $a->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                                <span>
                                    <p class="text-red-500">{{ $errors->first('id_kecamatan') }}</p>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kelurahan" id="id_kelurahan" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kelurahan</option>
                                    @foreach ($kelurahan as $i=>$a)
                                    <option value="{{ $a->id }}">{{ $a->nama_kelurahan }}</option>
                                    @endforeach
                                </select>
                                <span>
                                    <p class="text-red-500">{{ $errors->first('id_kelurahan') }}</p>
                                </span>
                            </div>
                        </div>
                    </div>
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

<script>
    $(document).ready(function() {
        // Ketika provinsi dipilih
        $('select[name="id_provinsi"]').on('change', function() {
            var provinsiId = $(this).val();
            if (provinsiId) {
                $.ajax({
                    url: '/getKabupaten/' + provinsiId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="id_kabupaten"]').empty();
                        $('select[name="id_kabupaten"]').append('<option value="">Pilih Kabupaten/Kota</option>');
                        $.each(data, function(key, value) {
                            $('select[name="id_kabupaten"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="id_kabupaten"]').empty();
            }
        });

        // Ketika kabupaten dipilih
        $('select[name="id_kabupaten"]').on('change', function() {
            var kabupatenId = $(this).val();
            if (kabupatenId) {
                $.ajax({
                    url: '/getKecamatan/' + kabupatenId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="id_kecamatan"]').empty();
                        $('select[name="id_kecamatan"]').append('<option value="">Pilih Kecamatan</option>');
                        $.each(data, function(key, value) {
                            $('select[name="id_kecamatan"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="id_kecamatan"]').empty();
            }
        });

        // Ketika kecamatan dipilih
        $('select[name="id_kecamatan"]').on('change', function() {
            var kecamatanId = $(this).val();
            if (kecamatanId) {
                $.ajax({
                    url: '/getKelurahan/' + kecamatanId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="id_kelurahan"]').empty();
                        $('select[name="id_kelurahan"]').append('<option value="">Pilih Kelurahan</option>');
                        $.each(data, function(key, value) {
                            $('select[name="id_kelurahan"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="id_kelurahan"]').empty();
            }
        });
    });
</script>


@endsection