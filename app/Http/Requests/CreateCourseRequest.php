<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'course_title' => 'required|string|max:255',
            'course_des' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1024',
            'type' => 'required|string|max:50',
            'sheet_amount' => 'required|integer|min:1',
            'duration' => 'required|integer|min:1',
        ];
    }
}
