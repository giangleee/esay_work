<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('message.email.string'),
            'email.string' => __('message.email.string'),
            'email.max' => __('message.email.max'),
            'email.unique' => __('message.email.unique'),
            'email.email' => __('message.email.email'),
            'password.required' => __('message.password.required'),
            'password.string' => __('message.password.string'),
            'password.min' => __('message.password.min'),
        ];
    }
}
