<?php

namespace App\Http\Requests;

class MenuRequest extends FilterForm
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
            'mnu_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'mnu_name.required' => 'The name category field is required',
        ];
    }
}
