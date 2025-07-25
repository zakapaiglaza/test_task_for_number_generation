<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|integer|min:1',
        ];
    }

    public function validationData()
    {
        return $this->route()->parameters();
    }
}
