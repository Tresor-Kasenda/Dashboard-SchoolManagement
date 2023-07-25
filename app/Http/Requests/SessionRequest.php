<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class SessionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'start_year' => ['required', 'date'],
            'end_year' => ['required', 'date'],
            'university_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
