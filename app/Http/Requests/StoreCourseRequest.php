<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'courseName' => 'required|string|min:3',
            'courseID'   => 'required|string|min:4',
            'description' => 'nullable|string',
        ];
    }
}
