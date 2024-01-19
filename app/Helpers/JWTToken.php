<?php

namespace App\Helpers;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    public static function createToken($id,$email):string
    {
        $key = env("JWT_KEY");
        $payload = [
            'iss' => "laravel-token",
            'iat' => time(),
            'exp' => time()+60+10,
            'email' => $email,
            'id' => $id,
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function createTokenForPass($email)
    {
        $key = env("JWT_KEY");
        $payload = [
            'iss' => "laravel-token",
            'iat' => time(),
            'exp' => time()+60+10,
            'email' => $email,
            'id' => 0,
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function tokenVarify($token):string |object{
        try {
            if($token==null){
                return "unautorize";
            }else{
                $key = env("JWT_KEY");
                $decode= JWT::decode($token, new Key($key, 'HS256'));
                return $decode;
            }
        } catch (Exception $e) {
            return "unautorize";
        }
    }
   
}
