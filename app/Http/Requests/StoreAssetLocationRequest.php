<?php

namespace App\Http\Requests;

use App\Models\AssetLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssetLocationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('asset_location_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
