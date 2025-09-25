<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'date' => 'required',
            'weight' => 'required|numeric|decimal:4,1',
            'calories' => 'required|numeric',
            'exercise_time' => 'required',
            'exercise_content' => 'max:120',
        ];
    }
    public function messages()
    {
        return [
            'date.required' => '日付を入力してください',
            'weight.required' => '体重を入力したください',
            'weight.numeric' => '数字で入力したください',
            'weight.decimal:4,1' => '4桁までの数字で入力したください',
            'weight.decimal:4,1' => '小数点は1桁で入力したください',
            'calories.required' => '摂取カロリーを入力したください',
            'calories.numeric' => '数字で入力したください',
            'exercise_time.required' => '運動時間を入力したください',
            'exercise_content.max:120' => '120文字以内で入力したください',
        ];
    }
}
