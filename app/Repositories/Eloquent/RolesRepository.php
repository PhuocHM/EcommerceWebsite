<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Roles;
use App\Repositories\Interfaces\RolesInterface;
use Carbon\Carbon;

class RolesRepository implements RolesInterface
{
    public function getAll($request)
    {
        $query = Roles::orderBy('id', 'DESC');
        if ($request->role) {
            $search = $request->role;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function store($request)
    {
        $role = new roles();
        $role->name       = $request->name;
        $role->slug      = $request->slug;
        $role->info   = $request->info;
        $role->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $role->save();
    }
    public function update($request, $id)
    {
        $role             = roles::find($id);
        $role->name       = $request->name;
        $role->slug      = $request->slug;
        $role->info   = $request->info;
        $role->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $role->save();
    }
    public function edit($id)
    {
        return roles::find($id);
    }
    public function destroy($id)
    {
        $role = roles::find($id);
        $role->delete();
    }
   
}
