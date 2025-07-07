<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicantRequest extends FormRequest
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
            'career_id' => 'required|exists:careers,id',
            'user_id' => 'nullable|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:applicants,email',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'motivational_letter' => 'nullable|string',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
        ];
    }
}
