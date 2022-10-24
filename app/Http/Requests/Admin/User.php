<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
       $rules = [
        'cover' => 'max:2000|mimes:png,jpg,jpeg',
        'name' => 'required|min:3|max:255',
        'password' => 'required',
        'level' => 'required'
    ];

    if (request()->id) {
        $rules['email'] = 'required';
    } else {
        $rules['email'] = 'required|min:3|unique:users';
    }
    return $rules;
}
}
