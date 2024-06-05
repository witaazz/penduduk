<?php

namespace App\Http\Requests\Daerah;

use Illuminate\Foundation\Http\FormRequest;

class CreateProvinsiRequest extends FormRequest
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
            'nama_provinsi' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nama_provinsi' => 'Nama provinsi tidak boleh kosong!'
        ];
    }
}
