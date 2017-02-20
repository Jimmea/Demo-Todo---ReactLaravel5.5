<?php

namespace App\Http\Requests;


class CategoryRequest extends FilterForm
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
            'cate_type'             => 'required',
            'cate_name'             => 'required',
            'cate_meta_title'       => 'required',
            'cate_meta_keyword'     => 'required',
            'cate_meta_description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cate_type.required'                => trans('admin::form.messages.required'),
            'cate_name.required'                => trans('admin::form.messages.required'),
            'cate_meta_title.required'          => trans('admin::form.messages.required'),
            'cate_meta_keyword.required'        => trans('admin::form.messages.required'),
            'cate_meta_description.required'    => trans('admin::form.messages.required')
        ];
    }
}
