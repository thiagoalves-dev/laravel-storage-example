<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'     => 'required|max:100',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }
}
