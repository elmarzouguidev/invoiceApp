<?php

declare(strict_types=1);

namespace App\Http\Requests\CRM;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:100',
            'telephone' => 'nullable|unique:customers|max:255',
            'email' => 'nullable|email|unique:customers|max:255',

            'rc' => 'nullable|numeric|unique:customers',
            'ice' => 'nullable|numeric|unique:customers',
            'details' => 'nullable|string',
            'address' => 'nullable|string',
        ];
    }
}
