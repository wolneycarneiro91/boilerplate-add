<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'token' => 'required|string|min:32|max:32',
        ];
    }
}

