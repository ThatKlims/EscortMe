<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoobaSizeRequest extends FormRequest
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
        return ['booba_size' => 'required|unique:booba_sizes|string'];
    }

    protected function prepareForValidation()
    {
        $this->merge(['booba_size' => stripslashes(strip_tags($this['booba_size']))]);
    }
}
