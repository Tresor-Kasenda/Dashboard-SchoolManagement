<?php

namespace App\Http\Requests\Admins\Process;

use Illuminate\Foundation\Http\FormRequest;

class PersistProcessRequest extends FormRequest
{
    public function rules(): array
    {
        return [

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
