<?php

declare(strict_types=1);

namespace App\Http\Requests\CRM;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerUpdateFormRequest extends FormRequest
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
            'telephone' => ['nullable',  Rule::unique('customers')->ignore($this->route('customer'), 'uuid')],
            'email' => ['nullable', 'email', Rule::unique('customers')->ignore($this->route('customer'), 'uuid')],

            'rc' => ['nullable', 'numeric', Rule::unique('customers')->ignore($this->route('customer'), 'uuid')],
            'ice' => ['nullable', 'numeric', Rule::unique('customers')->ignore($this->route('customer'), 'uuid')],
            'details' => 'nullable|string',
            'address' => 'nullable|string',
        ];
    }
}
