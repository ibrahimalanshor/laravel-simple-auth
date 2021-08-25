<?php 

namespace Ibrahimalanshor\SimpleAuth\Services;

use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{

    public function login(array $credentials, bool $remember): Bool
    {
        return Auth::attempt($credentials, $remember);
    }

    public function logout(): Void
    {
        Auth::logout();
    }

}

 ?>