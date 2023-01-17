<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'category_id' => ['nullable', 'exists:categories,id'],
            'title' => ['required', 'max:150', 'unique:posts'],
            'content' => ['nullable'],
            'cover_image' => ['nullable', 'image', 'max:520']
        ];
    }
}
