<?php

namespace App\Http\Requests\Penduduk;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePendudukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required',
            'nokk' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'status_pernikahan' => 'required',
            'id_provinsi' => 'required',
            'id_kabupaten' => 'required',
            'id_kecamatan' => 'required',
            'id_kelurahan' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nik.required' => 'NIK tidak boleh kosong',
            'nokk.required' => 'Nomor KK tidak boleh kosong',
            'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
            'goldar.required' => 'Golongan Darah tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir tidak boleh kosong',
            'pekerjaan.required' => 'Pekerjaan tidak boleh kosong',
            'status_pernikahan.required' => 'Status Pernikahan tidak boleh kosong',
            'id_provinsi.required' => 'Silakan pilih provinsi',
            'id_kabupaten.required' => 'Silakan pilih kabupaten',
            'id_kecamatan.required' => 'Silakan pilih kecamatan',
            'id_kelurahan.required' => 'Silakan pilih kelurahan',

        ];
    }
}
