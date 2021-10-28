<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\GroupPermisions;
use App\Models\Admin\Groups;
use App\Models\Admin\Roles;
use App\Repositories\Interfaces\GroupPermisionsInterface;
use Carbon\Carbon;

class GroupPermisionsRepository implements GroupPermisionsInterface
{
    public function getAll($request)
    {
        $query = GroupPermisions::with('group', 'role');
        if ($request->groupPermision) {
            $search = $request->groupPermision;

            $query->where('group_id', 'LIKE', '%' . $search . '%')->orWhere('role_id', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(10);
    }
    public function findbyGroup()
    {
        return Groups::orderBy('id', 'DESC')->get();
    }
    public function findbyRole()
    {
        return Roles::orderBy('id', 'DESC')->get();
    }
    public function store($request)
    {
        $groupPermision              = new GroupPermisions();
        $groupPermision->group_id    = $request->group_id;
        $groupPermision->role_id     = $request->role_id;
        $groupPermision->created_at  = Carbon::now('Asia/Ho_Chi_Minh');

        $groupPermision->save();
    }
    public function find($id)
    {
        return GroupPermisions::find($id);
    }
    public function update($request, $id)
    {
        $groupPermision              = GroupPermisions::find($id);
        $groupPermision->group_id    = $request->group_id;
        $groupPermision->role_id     = $request->role_id;
        $groupPermision->updated_at  = Carbon::now('Asia/Ho_Chi_Minh');

        $groupPermision->save();
    }
    public function destroy($id)
    {
        $groupPermision = GroupPermisions::find($id);
        return $groupPermision->delete();
    }
}
