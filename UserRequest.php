<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'userage' => 'required|numeric|min:18',
            'usercity' => 'required'
            //
        ];
    }

    public function messages()
    {
        return [
            "username.required" => "user name is required!",
            "useremail.required" => "user email is required!",
            "userage.required" => "user age is required!",
            "usercity.required" => "user city is required!"
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            //  'username' => strtoupper($this->username),
            'username' => Str::slug($this->username),
        ]);
    }

    protected $stopOnFirstFailure = true;
}
