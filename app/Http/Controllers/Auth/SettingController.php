<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function setting()
    {
        $user = User::with('customer')->find(Auth::id());
        $param = [
            'user' => $user,
        ];
        return view('auth.setting', $param);
    }

    public function edit(RegisterUserRequest $request)
    {
    }
}
