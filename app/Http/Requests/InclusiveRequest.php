<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InclusiveRequest extends FormRequest
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
        return ['age' => 'required|integer', 'height' => 'required|integer', 'weight' => 'required|integer', 'ethnicity_id' => 'required|integer',
            'booba_size_id' => 'required|integer', 'willing_to_escort_id' => 'required|integer', 'eye_color_id' => 'required|integer', 'hair_color_id' => 'required|integer',
        'phone_number' => 'nullable|string|numeric|notIn:\'|', 'email' => 'email:rfc,dns,filter|required|unique:escort_contact_info'
            , 'instagram_link' => 'notIn:\'|string|nullable|starts_with:https://www.instagram.com/,https://instagram.com/'
            , 'twitter_link' => 'notIn:\'|string|nullable|starts_with:https://twitter.com/,https://www.twitter.com/'
            , 'facebook_link' => 'notIn:\'|string|nullable|starts_with:https://www.facebook.com/,https://facebook.com/'
            , 'onlyfans_link' => 'notIn:\'|string|nullable|starts_with:https://onlyfans.com/,https://www.onlyfans.com/'
            , 'discord_name_and_id' => 'notIn:\'|string|nullable', 'alias' => 'string|alpha_dash|unique:posts',
            'description' => 'required|string|notIn:\'', 'location' => 'required|string|notIn:\'','Image' => 'required', 'Image.*' => 'image|mimes:jpg,png,jpeg|max:2048'
];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'age' => stripslashes(strip_tags($this['age'])),
            'height' => stripslashes(strip_tags($this['height'])),
            'weight' => stripslashes(strip_tags($this['weight'])),
            'ethnicity_id' => stripslashes(strip_tags($this['ethnicity_id'])),
            'booba_size_id' => stripslashes(strip_tags($this['booba_size_id'])),
            'willing_to_escort_id' => stripslashes(strip_tags($this['willing_to_escort_id'])),
            'eye_colors_id' => stripslashes(strip_tags($this['eye_colors_id'])),
            'phone_number' => stripslashes(strip_tags($this['phone_number'])),
            'email' => stripslashes(strip_tags($this['email'])),
            'alias' => stripslashes(strip_tags($this['alias'])),
            'active_state' => stripslashes(strip_tags($this['active_state'])),
            'description' => stripslashes(strip_tags($this['description'])),
            'location' => stripslashes(strip_tags($this['location']))]);
    }
}
