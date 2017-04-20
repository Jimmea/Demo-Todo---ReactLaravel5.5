<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;
use Illuminate\Foundation\Http\FormRequest;

class SuggestSearchRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sus_name' => 'required',
            'sus_link' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'sus_name.required' => trans('admin::form.messages.required'),
            'sus_link.required' => trans('admin::form.messages.required')
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
