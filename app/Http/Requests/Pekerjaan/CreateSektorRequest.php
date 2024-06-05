<?php

namespace App\Http\Requests\Pekerjaan;

use Illuminate\Foundation\Http\FormRequest;

class CreateSektorRequest extends FormRequest
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
            'sektor' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'sektor' => 'Silakan isi sektor pekerjaan'
        ];
    }
}
