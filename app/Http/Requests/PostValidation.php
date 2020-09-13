<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidation extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'path'=>['required','mimes:jpeg,png,jpg ',' max:1000'],
            'userid'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'لطفا عنوان را وارد کنید',
            'description.required'=>'لطفا متن را وارد کنید',
            'path.required'=>'لطفا فایلی را بارگزاری کنید',
            'path.mimes'=>'فرمت فایل نامعتبر می باشد',
            'path.max'=>'حجم فایل بیش از 1 مگابایت است',
            'userid.required'=>'لطفا شناسه کاربر را وارد کنید'
        ];
    }
}
