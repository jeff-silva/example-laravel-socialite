<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Auth
{
    public static function login($email, $password)
    {
        return Http::post('http://localhost:8002/realms/test/protocol/openid-connect/token', [
            'headers' => [ 'Content-Type' => 'application/x-www-form-urlencoded' ],
            'form_params' => [
                'client_id' => 'test',
                'client_secret' => '8orkvrvdBXqk7uaxwBfLVFivqxJZmxTt',
                'grant_type' => 'password',
                'username' => $email,
                'password' => $password,
            ],
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
