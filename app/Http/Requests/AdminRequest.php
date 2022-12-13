<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        //'dimensions:min_width=1080,min_height=1350',
        return [
        'agent_id'=>'required',
       'garage'=>['required','integer'],
       'status'=>['required'],
       'images.*'=>['required','min:2'],
      'description'=>['required'],
       'price'=>['required','integer'],
        'city'=>['required','string'],
        'address'=>['required','string'],
        'rooms'=>['required','integer'],            
        ];
    }
}
