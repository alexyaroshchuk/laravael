<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStaffRequest extends FormRequest
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
	                'full_name' => 'required|alpha',
                    'databirth' => 'required|date',
                    'id_position' => 'required'
	        		];
	    }
	    
	      public function messages()
	    {
	        return [
	            'firstname.required' => 'Необходимо указать имя',
	            'databirth.required' => 'Необходимо указать дату рождения',
	            'phonenumber.required' => 'Необходимо указать телефон',
	            'place_id.required' => 'Необходимо указать ИД должности',
	            'firstname.alpha' => 'Неверный формат имени',
	            'lastname.alpha' => 'Неверный формат фамилии',
	            'databirth.date' => 'Неверный формат даты рождения',        
	        ];
	    }
	}

