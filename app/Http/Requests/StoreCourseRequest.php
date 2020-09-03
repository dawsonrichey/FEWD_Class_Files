<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'teacher_id'  => [
                'required',
                'integer',
            ],
            'title'       => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'students.*'  => [
                'integer',
            ],
            'students'    => [
                'array',
            ],
            'date_time'   => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
