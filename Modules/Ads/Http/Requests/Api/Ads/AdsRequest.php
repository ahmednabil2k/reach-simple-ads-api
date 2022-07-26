<?php

namespace Modules\Ads\Http\Requests\Api\Ads;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AdsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => ['required', 'string', 'max:100'],
            'description'   => ['required', 'string', 'max:500'],
            'type'          => ['required', 'string', 'in:free,paid'],
            'advertiser_id' => ['sometimes','nullable', 'exists:advertisers,id'],
            'category_id'   => ['required', Rule::exists('categories', 'id')->withoutTrashed() ],
            'tags'          => ['required', 'array', 'min:1'],
            'tags.*'        => ['required', 'string', 'max:35'],
            'start_date'    => ['required', 'date', 'after:now' , 'date_format:Y-m-d H:i'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->validationError($errors)
        );
    }
}
