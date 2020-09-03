<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Http\Resources\Admin\LessonResource;
use App\Models\Lesson;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LessonsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('lesson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LessonResource(Lesson::with(['course'])->get());
    }

    public function store(StoreLessonRequest $request)
    {
        $lesson = Lesson::create($request->all());

        if ($request->input('thumbnail', false)) {
            $lesson->addMedia(storage_path('tmp/uploads/' . $request->input('thumbnail')))->toMediaCollection('thumbnail');
        }

        if ($request->input('video', false)) {
            $lesson->addMedia(storage_path('tmp/uploads/' . $request->input('video')))->toMediaCollection('video');
        }

        return (new LessonResource($lesson))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LessonResource($lesson->load(['course']));
    }

    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        if ($request->input('thumbnail', false)) {
            if (!$lesson->thumbnail || $request->input('thumbnail') !== $lesson->thumbnail->file_name) {
                if ($lesson->thumbnail) {
                    $lesson->thumbnail->delete();
                }

                $lesson->addMedia(storage_path('tmp/uploads/' . $request->input('thumbnail')))->toMediaCollection('thumbnail');
            }
        } elseif ($lesson->thumbnail) {
            $lesson->thumbnail->delete();
        }

        if ($request->input('video', false)) {
            if (!$lesson->video || $request->input('video') !== $lesson->video->file_name) {
                if ($lesson->video) {
                    $lesson->video->delete();
                }

                $lesson->addMedia(storage_path('tmp/uploads/' . $request->input('video')))->toMediaCollection('video');
            }
        } elseif ($lesson->video) {
            $lesson->video->delete();
        }

        return (new LessonResource($lesson))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lesson->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
