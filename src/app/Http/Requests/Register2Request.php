<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register2Request extends FormRequest
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
            //
            'weight_now' => 'required|decimal:4,1',
            'weight_target' => 'required|decimal:4,1',
        ];
    }
    public function messages()
    {
        return [
            'weight_now.required' => '現在の体重を入力してください',
            'weight_now.decimal:4,1' => '4桁までの数字で入力してください',
            'weight_now.decimal:4,1' => '小数点は1桁で入力してください',
            'weight_target.required' => '目標の体重を入力してください',
            'weight_target.decimal:4,1' => '4桁までの数字で入力してください',
            'weight_target.decimal:4,1' => '小数点は1桁で入力してください',
        ];
    }
}
