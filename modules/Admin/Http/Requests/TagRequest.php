<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class TagRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag_name'          => 'required|unique:tags,tag_name,'.$this->tag_id.',tag_id',
//            'tag_category_id'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tag_name.required'         => trans('admin::form.messages.required'),
            'tag_name.unique'           => trans('admin::form.messages.unique'),
//            'tag_category_id.required'  => trans('admin::form.messages.required')
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
