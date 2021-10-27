<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Users;
use App\Repositories\Interfaces\UsersInterface;
use Carbon\Carbon;

class UsersRepository implements UsersInterface
{
    public function getAll($request)
    {
        $query = Users::orderBy('id', 'DESC');
        if ($request->user) {
            $search = $request->user;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function store($request)
    {
        $user = new Users();
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = $request->password;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $user->save();
    }
    public function update($request, $id)
    {
        $user             = Users::find($id);
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = $request->password;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $user->save();
    }
    public function edit($id)
    {
        return Users::find($id);
    }
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
    }
    public function search()
    {
    }
}
