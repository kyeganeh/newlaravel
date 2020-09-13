<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
            'name'=>'required | min:2',
            'email'=>'required',
            'password'=>['required',' min:6 ',' max:12']
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'لطفا نام را وارد کنید',
            'email.required'=>'لطفا ایمیل را وارد کنید',
            'password.required'=>'لطفا رمز عبور را وارد کنید',
            'password.min'=>'رمز عبور باید بیشتر از 6 کاراکتر باشد',
            'password.max'=>'رمز عبور باید کمتر از 12 کاراکتر باشد'
        ];
    }
}
