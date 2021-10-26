<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Users;
use App\Repositories\Interfaces\UsersInterface;
use Carbon\Carbon;

class UsersRepository implements UsersInterface
{
    public function getAll()
    {
        return Users::all();
    }
    public function store($request)
    {         
        $user = new Users();
        $user->name       = $request->name;
        $user->slug       = $request->slug;
        $user->password   = $request->description;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $user->save();
    }
    public function update($request, $id)
    {
        $user             = Users::find($id);
        $user->name       = $request->name;
        $user->slug       = $request->slug;
        $user->password   = $request->description;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $user->save();
    }
    public function edit($id){
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
