<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'film_id' => 'required|integer|min:1',
            'room' => 'required|string|max:255',
            'start_time' => 'required|date',
            'session_type' => 'required|string|max:255',
            'languge' => 'required|string|max:255',

        ];
    }
}
