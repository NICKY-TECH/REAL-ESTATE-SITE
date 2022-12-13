<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentRequest extends FormRequest
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
        //'max:5048','dimensions:min_width=800,min_height=896'
        return [
            'agent_name'=>['required','string','filled'],
            'facebook'=>['nullable','string','filled'],
            'about_agent'=>['string','filled'],
            'email'=>['email','filled'],
            'phone_number'=>['filled','max:11','min:11','string'],
            'twitter'=>['nullable','filled'],
            'instagram'=>['filled','string'],
            'image'=>['mimes:jpg,jpeg,png'],
            'linkedIn'=>['filled','string']

        ];
    }
}
