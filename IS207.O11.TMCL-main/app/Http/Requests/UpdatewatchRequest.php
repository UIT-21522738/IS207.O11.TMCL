<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatewatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->user()->role == 'manager') {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['string'],
            'price' => ['integer', 'min: 1'],
            'storage' => ['integer', 'min: 0'],
            'dícount' => ['decimal'],
            'img1' => ['image'],
            'img2' => ['image'],
            'img3' => ['image'],
        ];
    }
}
