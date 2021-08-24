<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
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
            'share_duration' => 'sometimes|nullable|required_if:is_shareable,1|numeric|min:1', //required only if is_sharable is true
            'open_duration' => 'sometimes|required|nullable|numeric|min:1',
            'vote_duration' => 'sometimes|nullable|required_if:is_shareable,1|numeric|min:1',
            'products.*.name' => 'required|string',
            'products.*.unit' => 'required',
            'products.*.quantity' => 'required|numeric|min:0',
            'products.*.description' => 'nullable|string',
            'products.*.description' => 'nullable|string',
            'products.*.image' => 'nullable|max:3040',
            'save_as_draft' => 'sometimes|required|boolean'
        ];
    }
}
