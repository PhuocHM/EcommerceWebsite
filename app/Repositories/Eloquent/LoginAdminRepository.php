<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Employees;
use App\Repositories\Interfaces\LoginAdminRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class LoginAdminRepository implements LoginAdminRepositoryInterface
{
    public function loginAction($request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        if (Auth::guard('admins')->attempt($credentials)) {
            return true;
        } else {
            return false;
        }
    }
}
