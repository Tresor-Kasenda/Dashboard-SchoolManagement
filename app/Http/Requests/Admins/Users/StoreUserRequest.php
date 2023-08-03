<?php

declare(strict_types=1);

namespace App\Http\Requests\Admins\Users;

use App\Enums\UserTypeEnum;
use App\Models\University;
use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Password;

final class StoreUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Password::defaults()->mixedCase(), 'confirmed'],
            'university' => ['nullable', 'integer', new Exists(University::class, 'id')],
            'user_type' => [
                'required',
                'string',
                new Enum(UserTypeEnum::class)
            ]
        ];
    }
}
