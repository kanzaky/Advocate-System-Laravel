<?php

namespace App\Http\Requests;

use App\Models\ProjectStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_status_edit');
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
