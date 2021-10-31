<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\RegisterUserRequest;
use App\Http\Requests\Users\ResetPasswordRequest;
use App\Http\Requests\Users\SettingUserRequest;
use App\Models\User;
use App\Models\Users\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function update(SettingUserRequest $request, $id)
    {

        User::findOrFail(Auth::id())->update($request->only('name', 'email'));

        $data = $request->only('phone', 'address', 'slug');
        $data['name'] = $request->customer_name;
        Customers::findOrFail($id)->update($data);

        return redirect()->route('index');
    }

    public function settingPassword()
    {
        return view('auth.passwords.reset');
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('index');
    }
}
