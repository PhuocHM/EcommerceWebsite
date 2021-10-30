<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UsersInterface;
use Carbon\Carbon;

class UsersRepository implements UsersInterface
{
    public function getAll($request)
    {
        $query = User::orderBy('id', 'DESC');
        if ($request->user) {
            $search = $request->user;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function store($request)
    {
        $user = new User();
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = $request->password;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $user->save();
    }
    public function update($request, $id)
    {
        $user             = User::find($id);
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = $request->password;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $user->save();
    }
    public function edit($id)
    {
        return User::find($id);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }

}
