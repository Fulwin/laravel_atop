<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'password' => 'nullable|min:6|max:20',
            'email' => 'required|email|unique:users,name,' . Auth::id(),
            'introduction' => 'nullable|max:80',
            'phone' => 'nullable|regex:/^1[35789][0-9]{9}$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名不能为空',
            'name.min' => '姓名过短，请检查并重写',
            'name.max' => '姓名过长，请检查并重写',
            'password.min' => '密码不能小于6个字符',
            'password.max' => '密码不能大于20个字符',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式错误',
            'email.unique' => '邮箱已存在',
            'introduction.max' => '简介不能大于80个字符',
            'phone.regex' => '手机格式错误',
        ];
    }
}
