<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HairColorRequest extends FormRequest
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
        return ['hair_color' => 'required|unique:hair_colors|string'];
    }

    protected function prepareForValidation()
    {
        $this->merge(['hair_color' => stripslashes(strip_tags($this['hair_color']))]);
    }
}
