<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class EventRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'evn_name'              => 'required',
            'evn_category_id'       => 'required',
        ];

        return $rules;
    }


    public function messages()
    {
        return [
            'evn_name.required'      => trans('admin::form.messages.required'),
            'evn_category_id.*'      => trans('admin::form.messages.required'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
