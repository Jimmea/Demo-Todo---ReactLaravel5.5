<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class TabActionRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ta_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ta_name.required' => trans('admin::form.messages.required')
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
