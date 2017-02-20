<?php

namespace App\Http\Requests;

class AccountRequest extends FilterForm
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
        return  [
            'adm_loginname'         => 'required|unique:admin_users,adm_loginname,' . $this->adm_id . ',adm_id',
            'adm_name'              => 'required',
            'mod_id'                => 'required',
            'adm_email'             => 'required|email|unique:admin_users,adm_email,' . $this->adm_id . ',adm_id',
            'adm_phone'             => 'regex:/^[0-9]+$/',
        ];
    }

    public function messages()
    {
        return  [
            'adm_loginname.required'          => 'The login name is not blank',
            'adm_loginname.unique'            => 'The login name is already',
            'adm_name.required'               => 'The full name is not blank',
            'mod_id.required'                 => 'Please select some under modules',
            'adm_email.required'              => 'The email is not blank',
            'adm_email.unique'                => 'The email is already',
            'adm_email.email'                 => 'The email is invalid',
            'adm_phone.regex'                 => 'The phone is invalid. The phone is number',
        ];
    }
}


