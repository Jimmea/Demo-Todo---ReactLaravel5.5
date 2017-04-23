<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class CategoryBannerRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cab_title'      => 'required',
            'cab_link'      => 'required',
            'cab_picture'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cab_title.required' => trans('admin::form.messages.required'),
            'cab_link.required' => trans('admin::form.messages.required'),
            'cab_picture.required' => trans('admin::form.messages.required'),
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
