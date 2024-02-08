<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCocktailRequest extends FormRequest
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
            'name' => 'required|max:14|string',
            'brand' => 'nullable|max:19|string',
            'price' => 'nullable|decimal:2|max:99.99',
            'is_alcholic' => 'nullable|boolean',
            'description' => 'nullable|string|max:250'
        ];
    }
}
