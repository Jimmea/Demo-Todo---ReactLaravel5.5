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
            'cate_name'             => 'required|unique:categories,cate_name,'. $this->id . ',cate_id',
            'cate_meta_title'       => 'required',
            'cate_meta_keyword'     => 'required',
            'cate_meta_description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cate_type.required'        => 'The type category field is required',
            'cate_name.required'        => 'The name category field is required',
            'cate_meta_title'           => 'The meta title field is required',
            'cate_meta_keyword'         => 'The meta keyword field is required',
            'cate_meta_description'     => 'The meta description field is required',
        ];
    }
}
