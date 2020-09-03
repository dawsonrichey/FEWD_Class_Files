<?php

namespace App\Http\Requests;

use App\Models\Lesson;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLessonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'course_id' => [
                'required',
                'integer',
            ],
            'title'     => [
                'string',
                'required',
            ],
            'position'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
