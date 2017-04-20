<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class BannerRequest extends FilterForm
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
            'ban_title'   => 'required',
            'ban_picture' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ban_title.required'   => trans('admin::form.messages.required'),
            'ban_picture.required' => trans('admin::form.messages.required'),
        ];
    }
}
