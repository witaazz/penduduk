<?php

namespace App\Http\Requests\Daerah;

use Illuminate\Foundation\Http\FormRequest;

class CreateKabupatenRequest extends FormRequest
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
            'id_provinsi' => 'required',
            'nama_kabupaten' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'id_provinsi.required' => 'Silakan pilih provinsi!',
            'nama_kabupaten' => 'Nama kabupaten tidak boleh kosong!'
        ];
    }
}
