<?php

namespace App\Http\Requests;

use App\Models\TestAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTestAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('test_answer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'test_result_id' => [
                'required',
                'integer',
            ],
            'question_id'    => [
                'required',
                'integer',
            ],
            'option_id'      => [
                'required',
                'integer',
            ],
        ];
    }
}
