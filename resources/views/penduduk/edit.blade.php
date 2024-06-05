@extends('template.layout')

@section('title')
Edit Data
@endsection

@section('content')

<h1 class="text-2xl font-bold">Edit Data</h1>
<!-- <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p> -->
<a href="{{ route('penduduk') }}"><button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali </button></a>

<div class="bg-white-100 dark:bg-white-100">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white  p-8 rounded-lg shadow-md border ">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Data Penduduk</h1>
            <form method="POST" action="{{ route('updatependuduk', $penduduk->id) }}">
                @csrf
                <div class="mb-5">
                    <label for="nik" class="mb-3 block text-base font-medium text-[#07074D]">
                        NIK
                    </label>
                    <input type="text" name="nik" id="nik" value="{{ $penduduk->nik }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                        <option value="{{ $a->nokk }}" @if ($penduduk->nokk==$a->nokk ) selected @endif>{{ $a->nokk }}</option>
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
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $penduduk->nama_lengkap }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $penduduk->tempat_lahir }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $penduduk->tanggal_lahir }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin_laki_laki" value="Laki-laki" @if ($penduduk->jenis_kelamin == 'Laki-laki') checked @endif
                    class="font-medium text-[#6B7280]" /> Laki-laki

                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan" @if ($penduduk->jenis_kelamin == 'Perempuan') checked @endif
                    class="ml-5 font-medium text-[#6B7280]" /> Perempuan
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
                                <option value="Islam" @if ($penduduk->agama=='Islam' ) selected @endif>Islam</option>
                                <option value="Khatolik" @if ($penduduk->agama=='Khatolik' ) selected @endif>Khatolik</option>
                                <option value="Protestan" @if ($penduduk->agama=='Protestan' ) selected @endif>Protestan</option>
                                <option value="Hindu" @if ($penduduk->agama=='Hindu' ) selected @endif>Hindu</option>
                                <option value="Buddha" @if ($penduduk->agama=='Buddha' ) selected @endif>Buddha</option>
                                <option value="Konghucu" @if ($penduduk->agama=='Konghucu' ) selected @endif>Konghucu</option>
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
                                <option value="A" @if ($penduduk->goldar=='A' ) selected @endif>A</option>
                                <option value="B" @if ($penduduk->goldar=='B' ) selected @endif>B</option>
                                <option value="O" @if ($penduduk->goldar=='O' ) selected @endif>O</option>
                                <option value="AB" @if ($penduduk->goldar=='AB' ) selected @endif>AB</option>
                                <option value="Tidak Tahu" @if ($penduduk->goldar=='Tidak Tahu' ) selected @endif>Tidak Tahu</option>
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
                                <option value="SD" @if ($penduduk->pendidikan_terakhir=='SD' ) selected @endif>SD</option>
                                <option value="SMP" @if ($penduduk->pendidikan_terakhir=='SMP' ) selected @endif>SMP</option>
                                <option value="SMA" @if ($penduduk->pendidikan_terakhir=='SMA' ) selected @endif>SMA</option>
                                <option value="Diploma" @if ($penduduk->pendidikan_terakhir=='Diploma' ) selected @endif>Diploma</option>
                                <option value="Strata 1" @if ($penduduk->pendidikan_terakhir=='Strata 1' ) selected @endif>Strata 1</option>
                                <option value="Strata 2" @if ($penduduk->pendidikan_terakhir=='Strata 2' ) selected @endif>Strata 2</option>
                                <option value="Strata 3" @if ($penduduk->pendidikan_terakhir=='Strata 3' ) selected @endif>Strata 3</option>
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
                                <option value="{{ $a->id }}" @if ($penduduk->id_pekerjaan==$a->id ) selected @endif>{{ $a->nama_pekerjaan }}</option>
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
                        <option value="Menikah" @if ($penduduk->status_pernikahan=='Menikah' ) selected @endif>Menikah</option>
                        <option value="Tidak Menikah" @if ($penduduk->status_pernikahan=='Tidak Menikah' ) selected @endif>Tidak Menikah</option>
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
                                    <option value="{{ $a->id }}" @if ($penduduk->id_provinsi==$a->id ) selected @endif>{{ $a->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kabupaten" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kabupaten/Kota</option>
                                    @foreach ($kabupaten as $i=>$a)
                                    <option value="{{ $a->id }}" @if ($penduduk->id_kabupaten==$a->id ) selected @endif>{{ $a->nama_kabupaten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kecamatan" id="id_kecamatan" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kecamatan</option>
                                    @foreach ($kecamatan as $i=>$a)
                                    <option value="{{ $a->id }}" @if ($penduduk->id_kecamatan==$a->id ) selected @endif>{{ $a->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <select name="id_kelurahan" id="id_kelurahan" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    <option value="--" disabled selected>Pilih Kelurahan</option>
                                    @foreach ($kelurahan as $i=>$a)
                                    <option value="{{ $a->id }}" @if ($penduduk->id_kelurahan==$a->id ) selected @endif>{{ $a->nama_kelurahan }}</option>
                                    @endforeach
                                </select>
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



@endsection