<?php

declare(strict_types=1);

namespace App\Http\Requests\Admins\University;

use App\Models\University;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

final class StoreUniversityRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                new Unique(University::class, 'name')
            ],
            'initials' => [
                'required',
                'string',
                'max:255',
                new Unique(University::class, 'initials')
            ],
            'email' => [
                'nullable',
                'email',
                'max:255',
                '/^[a-zA-Z0-9\+_\-]+(\.[a-zA-Z0-9\+_\-]+)*@[a-zA-Z0-9\-]+\.[a-z]{2,6}$/ix',
                new Unique(University::class, 'email')
            ],
            'phone' => [
                'required',
                'string',
                'max:255',
                new Unique(University::class, 'phone')
            ],
            'address' => [
                'nullable',
                'string',
                'max:255'
            ],
            'code' => [
                'nullable',
                'string',
                'max:255',
                new Unique(University::class, 'code')
            ],
        ];
    }
}
