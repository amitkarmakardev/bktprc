<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookIssueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'book_id' => 'required|exists:books,book_id',
            'issued_to' => 'required|exists:members,member_id',
        ];
    }
}
