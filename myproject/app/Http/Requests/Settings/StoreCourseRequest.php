<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'courseName' => 'required|string',
            'courseID'   => 'required|string',
            'description'=> 'nullable|string',
        ];
    }
}
