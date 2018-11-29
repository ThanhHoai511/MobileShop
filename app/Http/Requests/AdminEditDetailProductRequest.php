<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditDetailBillImportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'imei' => 'bail|required|unique:detail_bill_imports,imei',
            'price' => 'bail|required|numeric',
            'sale' => 'numeric',
            'photo[]' => 'mimes:jpeg,jpg,png',
        ];
    }
}
