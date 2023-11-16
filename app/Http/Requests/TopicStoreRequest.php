<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=>['required','unique:nguyenducvinh_topic'],
            'metakey'=>['required'],
            'metadesc'=>['required'],
            'parent_id'=>['required']

        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'Tên topic không được để trống',
            'name.unique'=>'Tên topic đã tồn tại',

            'metakey.required'=>'Từ khóa không được để trống',
            'metadesc.required'=>'Mô tả không được để trống'

        ];
    }
}
