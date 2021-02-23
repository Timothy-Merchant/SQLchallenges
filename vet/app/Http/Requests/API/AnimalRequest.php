<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            "name" => ["required", "string", "max:100"],
            "type" => ["required", "string", "min:3"],
            "date_of_birth" => ["required", "string", "min:3"],
            "Weight" => ["required", "float", "min:3"],
            "Height" => ["required", "float", "min:3"],
            "Biteyness" => ["required", "integer", "min:3"],
        ];
    }
}
