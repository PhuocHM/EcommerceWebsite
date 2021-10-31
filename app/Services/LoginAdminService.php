<?php

namespace App\Services;

use App\Models\Admin\Employees;
use App\Repositories\Eloquent\LoginAdminRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            $request->session()->regenerate();

            return redirect()->route('home');
        } else {

            $message = 'Tên người dùng hoặc mật khẩu không đúng.';

            return redirect()->route('login.admin')->with('login-fail', $message);
        }
    }

    public function logoutAction($request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.admin');
    }

    public function resetPassAction($request)
    {
        $admin = Employees::findOrFail(Auth::id());
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->route('home')->with('status-password', 'Đổi mật khẩu thành công');
    }
}
