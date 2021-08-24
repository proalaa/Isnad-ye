<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


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
        $attributes =[];
        $user = $request->user();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone_number' => 'nullable|digits:9',
            'commercial_register_number' => 'nullable|numeric|digits_between:5,12',
            'birth_date' => 'nullable|date',
            'profile_image' => 'nullable|max:3040',
            'commercial_register_certificate' => 'nullable|max:3040',
        ]);
        if($request->file('profile_image')){
            $path = request('profile_image')->store('avatars');
            $attributes['profile_image'] = $path;

        }
        if($request->file('commercial_register_certificate')){
            $path = request('commercial_register_certificate')->store('certificates');
             $attributes['commercial_register_certificate'] = $path;
        }
        $attributes = array_merge($attributes , $request->except(['profile_image' , 'commercial_register_certificate']));
        return tap($user)->update($attributes);
    }
}
