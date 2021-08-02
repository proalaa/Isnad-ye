<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'is_shareable' => 'sometimes|required|boolean',
            'post_duration' => 'sometimes|nullable|required_if:is_shareable,1|numeric|min:1', //required only if is_sharable is true
            'open_duration' => 'sometimes|required|nullable|numeric|min:1',
            'vote_duration' => 'sometimes|required|nullable|numeric|min:1',
            'products.*.name' => 'required|string',
            'products.*.unit' => 'required',
            'products.*.quantity' => 'required|numeric',
            'products.*.description' => 'nullable|string',
        ];
    }
}
