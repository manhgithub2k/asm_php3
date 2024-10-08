<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storetin_tucRequest extends FormRequest
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
            'tieu_de' => 'required',
            'tom_tat' => 'required',
            'noi_dung' => 'required',
            'hinh_anh' => 'nullable|image|max:2048',
            'id_loai' => 'required',
            'tac_gia' => 'required'
        ];
    }
}
