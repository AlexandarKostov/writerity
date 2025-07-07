<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    if (Contact::where('email', $value)->exists()) {
                        abort(403, 'This email is already in use.');
                    }
                },
            ],
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'phone_number' => '|string|max:255',
            'message' => 'required|string',
        ];
    }
}
