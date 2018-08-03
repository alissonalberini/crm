<?php

namespace App\Http\Requests\Indication;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('administrator');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email1' => '',
            'email2' => '',
            'phone1' => '',
            'phone2' => '',
            'source' => '',
            'obs' => ''
        ];
    }
}
