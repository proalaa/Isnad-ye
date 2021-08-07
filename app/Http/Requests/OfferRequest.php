<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OfferRequest extends FormRequest
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
            'warranty_policy' => 'required|string',
            'shipping_policy' => 'required|string',
            'validity' => 'required|numeric|min:1',
            'delivery_duration' => 'required|numeric|min:1',
            'total' => 'required|numeric|min:1',
            'min_price' => 'required|numeric|min:1',
            'notices' => 'nullable|string',
            'products.*.off_name' => 'required|string',
            'products.*.brand' => 'required|string',
            'products.*.made_in' => 'required',
            'products.*.price' => 'required|numeric|min:1',
            'products.*.has_expired_date' => 'required|boolean',
            'products.*.expired_date' => 'exclude_if:products.*.has_expired_date,false|required|date',
            'products.*.notices' => 'nullable|string',
            ];
    }
}
