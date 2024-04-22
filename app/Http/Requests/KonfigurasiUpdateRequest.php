<?php

namespace App\Http\Requests;

use App\Models\Konfigurasi;
use Illuminate\Foundation\Http\FormRequest;

class KonfigurasiUpdateRequest extends FormRequest
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
        $model = Konfigurasi::first();
        return [
            'alamat' => 'required',
            'email' => 'required|unique:konfigurasis,email,'.$model->id.',id',
            'whatsapp' => 'required',
        ];
    }
}
