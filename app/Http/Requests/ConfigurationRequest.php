<?php

namespace App\Http\Requests;

class ConfigurationRequest extends FilterForm
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
            'con_site_title'       => 'required',
            'con_meta_title'       => 'required',
            'con_meta_keyword'     => 'required',
            'con_meta_description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'con_site_title.required'       => 'The site title field is required',
            'con_meta_title.required'       => 'The meta title field is required',
            'con_meta_keyword.required'     => 'The meta keyword field is required',
            'con_meta_description.required' => 'The meta description field is required',
        ];
    }
}
