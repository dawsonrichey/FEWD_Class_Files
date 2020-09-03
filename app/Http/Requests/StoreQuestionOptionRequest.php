<?php

namespace App\Http\Requests;

use App\Models\QuestionOption;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQuestionOptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('question_option_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'option_text' => [
                'string',
                'required',
            ],
        ];
    }
}
