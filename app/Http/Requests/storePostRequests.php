<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequests extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'description.required' => 'The description field is required',
        ];
    }
}
