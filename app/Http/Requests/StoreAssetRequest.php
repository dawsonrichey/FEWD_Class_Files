<?php

namespace App\Http\Requests;

use App\Models\Asset;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('asset_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'category_id'   => [
                'required',
                'integer',
            ],
            'serial_number' => [
                'string',
                'nullable',
            ],
            'name'          => [
                'string',
                'required',
            ],
            'status_id'     => [
                'required',
                'integer',
            ],
            'location_id'   => [
                'required',
                'integer',
            ],
        ];
    }
}
