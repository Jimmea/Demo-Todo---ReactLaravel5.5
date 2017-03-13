<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\FilterForm;

class CategoryTabActionRequest extends FilterForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cta_tabaction_id' => 'required|unique:category_tab_actions,cta_tabaction_id,'.$this->cta_id.',cta_id',
            'cta_group_category_id'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cta_tabaction_id.required'  => trans('admin::form.messages.required'),
            'cta_group_category_id.*'          => trans('admin::form.messages.required'),
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
