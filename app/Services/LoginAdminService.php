<?php

namespace App\Services;

use App\Repositories\Eloquent\LoginAdminRepository;

class LoginAdminService
{
    private $loginAdminRepository;
    public function __construct(LoginAdminRepository $loginAdminRepository)
    {
        $this->loginAdminRepository = $loginAdminRepository;
    }
    public function loginAction($request)
    {
        $login = $this->loginAdminRepository->loginAction($request);

        if ($login) {

            $request->session()->push('loginAdmin', true);

            return redirect()->route('home');
        } else {

            $message = 'Tên người dùng hoặc mật khẩu không đúng.';

            return redirect()->route('login.admin')->with('login-fail', $message);
        }
    }
}
