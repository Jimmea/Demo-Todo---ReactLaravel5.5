<?php

namespace App\Http\Requests;

class ModuleRequest extends FilterForm
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
            'mod_name' => 'required',
            'mod_listname' => 'required',
            'mod_listrouter' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mod_name.required' => trans('admin::form.messages.required'),
            'mod_listname.required' => trans('admin::form.messages.required'),
            'mod_listrouter.required' => trans('admin::form.messages.required'),
        ];
    }
}
