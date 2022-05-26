<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'source_warehouse_id' => 'required|integer|min:1|different:dest_warehouse_id',
            'dest_warehouse_id' => 'required|integer|min:1',
            'product_id' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'note' => 'nullable|max:2000',
        ];
    }
}
