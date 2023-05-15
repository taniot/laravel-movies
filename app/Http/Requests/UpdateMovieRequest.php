<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'original_title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|digits:4|min:1890|max:'.date('Y'),
            'country' => 'required|string|max:2|uppercase',
            'cast' => 'required|string',
            'production' => 'required|string',
            'director' => 'required|string',
            'genres' => 'required|string',
        ];
    }
}
