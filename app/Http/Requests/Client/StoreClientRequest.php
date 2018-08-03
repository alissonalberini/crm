<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('client-create');
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
            'company_name' => 'required',
            'vat' => 'max:12',
            'email' => 'required',
            'address' => '',
            'zipcode' => 'max:8',
            'city' => '',
            'primary_number' => 'max:10',
            'secondary_number' => 'max:10',
            'industry_id' => '',
            'company_type' => '',
            'user_id' => '',

            'cpf_cnpj' => 'max:14',
            'profession' => '',
            'email2' => '',
            'sex' => '',
            'birth' => '',
            'income' => '',
            'number' => '',
            'neighborhood' => '',
            'complement' => '',
            'region_interest' => '',
            'imobile_type' => '',
            'dormitory_min' => '',
            'dormitory_max' => '',
            'wc_min' => '',
            'wc_max' => '',
            'value_min' => '',
            'value_max' => '',
            'useful_area_min' => '',
            'useful_area_max' => '',
            'total_area_min' => '',
            'total_area_max' => ''
        ];
    }
}
