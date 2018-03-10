<?php

namespace AB4UGLog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogBookRequest extends FormRequest
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
            'logname' => 'string|required|max:255|unique:logbooks,logbook',
        ];
    }
}
