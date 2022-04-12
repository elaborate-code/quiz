<?php

namespace App\Http\Requests;

use App\Services\CurrentQuiz;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rule;

class RecordChoiceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'choice_number' => Crypt::decrypt($this->choice_number),
        ]);
    }

    public function rules(): array
    {
        $current_quiz = new CurrentQuiz;
        $current_questions_ids = $current_quiz()->questions->pluck('id');

        return [
            'question_id' => ['required', 'integer', Rule::in($current_questions_ids)],
            'choice_number' => ['required', 'integer', Rule::in(config('rules.choice_number.in'))],
        ];
    }
}
