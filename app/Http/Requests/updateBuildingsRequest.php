<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateBuildingsRequest extends FormRequest
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
            'agent_id'=>['filled','string'],
           'garage'=>['filled','integer'],
           'status'=>['filled'],
           'images.*'=>['filled'],
          'description'=>['filled'],
           'price'=>['filled','integer'],
            'city'=>['filled','string'],
            'address'=>['filled','string'],
            'rooms'=>['filled','integer'],            
            ];
    }
}
