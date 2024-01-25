<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
    public function rules()
    {
        return [
            'items' => 'required|array',
            'items.*.item_id' => 'required|exists:items,id',
            'items.*.qty' => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'items.required' => 'Items is required.',
            'items.*.item_id.exists' => 'Selected item does not exist.',
            'items.*.qty.required' => 'Quantity is required for each item.',
            'items.*.qty.numeric' => 'Quantity must be a number.',
            'items.*.qty.min' => 'Quantity must be at least :min.',
        ];
    }
}
