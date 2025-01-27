<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => [
                'string',
                'required',
                'unique:comics',
                'max:50'
            ],
            'description' => [
                'string',
                'nullable'
            ],
            'price' => [
                'numeric',
                'decimal:0,2',
                'required',
                'max:99'
            ],
            'series' => [
                'string',
                'max:50',
                'required'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa'
        ];
    }
}
