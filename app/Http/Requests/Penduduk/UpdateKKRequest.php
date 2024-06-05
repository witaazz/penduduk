<?php

namespace App\Http\Requests\Penduduk;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKKRequest extends FormRequest
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
            'nokk' => 'required',
            'foto_kk' => 'mimes:jpg,jpeg,png,pdf'
        ];
    }

    public function messages(): array
    {
        return [
            'nokk.required' => 'No KK tidak boleh kosong!',
            'foto_kk.mimes' => 'Unggah scan KK dengan format JPG/PNG/JPEG/PDF'
        ];
    }
}
