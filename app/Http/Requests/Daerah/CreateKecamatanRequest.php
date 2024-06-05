<?php

namespace App\Http\Requests\Daerah;

use Illuminate\Foundation\Http\FormRequest;

class CreateKecamatanRequest extends FormRequest
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
            'id_kabupaten' => 'required',
            'nama_kecamatan' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'id_kabupaten.required' => 'Silakan pilih kabupaten!',
            'nama_kecamatan' => 'Nama kecamatan tidak boleh kosong!'
        ];
    }
}
