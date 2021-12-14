<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHotelRequest extends FormRequest
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
            
            'group' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'phone' => 'required|min:10',
            'people_id' => 'required|min:10',
            'email'=> 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id.required' =>'Ai cho ông để trống',
            'group.required' =>'Ai cho ông để trống',
            'name.required' =>'Ai cho ông để trống',
            'birthday.required' =>'Ai cho ông để trống',
            'sex.required' =>'Ai cho ông để trống',
            'phone.required' =>'Ai cho ông để trống',
            'people_id.required' =>'Ai cho ông để trống',
            'email.required' =>'Ai cho ông để trống',
            'address.required' =>'Ai cho ông để trống',
        ];
        
    }
}
