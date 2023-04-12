<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncomeCategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:App\Models\User,id'],
            'category_name' => ['required', 'max:10'],
        ];
    }

        /**
     *  バリデーション項目名定義
     * @return array
     */
    public function attributes()
    {
        return [
            'user_id' => 'ID',
            'category_name' => 'カテゴリー名',
        ];
    }
}
