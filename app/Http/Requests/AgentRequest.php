<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
        // $table->increments('id');
        // $table->string('agent_name');
        // $table->string('facebook')->nullable();
        // $table->string('about_agent');
        // $table->string('email');
        // $table->string('phone_number');
        // $table->string('twitter')->nullable();
        // $table->string('instagram');
        // $table->string('image');
        // $table->string('linkedIn');

        return [
            //'dimensions:min_width=800,min_height=896'
            'agent_name'=>['required','string','unique:agents'],
            'facebook'=>['nullable','string','unique:agents'],
            'about_agent'=>['required','string'],
            'email'=>['email','required','unique:agents'],
            'phone_number'=>['required','max:11','min:11','string','unique:agents'],
            'twitter'=>['nullable','unique:agents'],
            'instagram'=>['required','unique:agents'],
            'image'=>['required','mimes:jpg,jpeg,png','max:5048'],
            'linkedIn'=>['required','string','unique:agents']

        ];
    }
}
