<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Get authenticated user.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function current(Request $request)
    {
        return response()->json($request->user());
    }
    public function update(Request $request)
    {

        $user = Auth::user();
        $user->update($request->validate([
            'name' => 'required',
            'email' => 'required|Email',
            'phone_number' => 'nullable|digits:9',
            'country_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'district' => 'nullable|string'
        ]));

    }
}
