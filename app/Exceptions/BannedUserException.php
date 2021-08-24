<?php

namespace App\Exceptions;

use Illuminate\Validation\ValidationException;

class BannedUserException extends ValidationException
{
    /**
     * @param  \App\User $user
     * @return static
     */
    public static function forUser($user)
    {
        return static::withMessages([
            'email' => [__('auth.banned')]
        ]);
    }
}
