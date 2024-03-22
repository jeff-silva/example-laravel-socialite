<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Auth
{
    public static function login($email, $password)
    {
        return Http::post('http://localhost:8002/realms/test/protocol/openid-connect/auth', [
            'username' => $email,
            'password' => $password,
            'client_id' => 'your-client-id',
            'grant_type' => 'password',
        ]);
    }

    public static function logout()
    {
        // ...
    }

    public static function user()
    {
        // ...
    }

    public static function register($email, $password, $name)
    {
        //
    }
}
