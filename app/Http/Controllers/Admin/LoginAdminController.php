<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\Services\LoginAdminService;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    private $loginAdminService;
    public function __construct(LoginAdminService $loginAdminService)
    {
        $this->loginAdminService = $loginAdminService;
    }

    public function formLogin()
    {
        return view('admin.login-admin.login');
    }

    public function loginAction(LoginAdminRequest $request)
    {
        return  $this->loginAdminService->loginAction($request);
    }

    public function logoutAction(Request $request)
    {
        return $this->loginAdminService->logoutAction($request);
    }
}
