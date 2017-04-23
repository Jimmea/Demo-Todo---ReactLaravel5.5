<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class SuggestKeywordRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'suk_name' => 'required',
            'suk_link'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'suk_name.required' => trans('admin::form.messages.required'),
            'suk_link.required' => trans('admin::form.messages.required'),
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
