<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EyeColorRequest extends FormRequest
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
        return ['eye_color' => 'required|unique:eye_colors|string'];
    }

    protected function prepareForValidation()
    {
        $this->merge(['eye_color' => stripslashes(strip_tags($this['eye_color']))]);
    }
}
