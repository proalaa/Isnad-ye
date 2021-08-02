<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone_number' => 'nullable|digits:9',
            'commercial_register_number' => 'nullable|numeric|digits_between:5,12',
            'birth_date' => 'nullable|date',
        ]);
        return tap($user)->update($request->all());
    }
}
