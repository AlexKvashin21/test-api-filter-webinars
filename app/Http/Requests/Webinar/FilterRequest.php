<?php

namespace App\Http\Requests\Webinar;

use App\Http\Requests\ApiRequest;

class FilterRequest extends ApiRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => '',
            'theme' => '',
            'month' => '',
        ];
    }
}
