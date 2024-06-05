<?php

namespace App\Http\Requests\Daerah;

use Illuminate\Foundation\Http\FormRequest;

class CreateKelurahanRequest extends FormRequest
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
            'id_kecamatan' => 'required',
            'nama_kelurahan' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'id_kecamatan.required' => 'Silakan pilih kecamatan!',
            'nama_kelurahan' => 'Nama kelurahan tidak boleh kosong!'
        ];
    }
}
