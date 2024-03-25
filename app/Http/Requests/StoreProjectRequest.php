<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'project_name'=>['required', 'unique:project','max:150'],
            'description'=>['nullable'],
            'image' => ["extensions:jpg, jpeg, png, bmp,  webp" || 'url:http,https'],
            'github_repo'=>['required','url:http,https']
        ];
    }
}
