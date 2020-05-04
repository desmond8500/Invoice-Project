<?php

namespace App\Http\Requests\API;

use App\Models\Devis_input;
use InfyOm\Generator\Request\APIRequest;

class UpdateDevis_inputAPIRequest extends APIRequest
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
        $rules = Devis_input::$rules;
        
        return $rules;
    }
}
