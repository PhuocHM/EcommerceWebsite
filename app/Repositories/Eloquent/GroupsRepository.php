<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Groups;
use App\Repositories\Interfaces\GroupsInterface;
use Carbon\Carbon;

class GroupsRepository implements GroupsInterface
{
    public function getAll($request)
    {
        $query = Groups::orderBy('id', 'DESC');
        if ($request->group) {
            $search = $request->group;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function store($request)
    {
        $group = new Groups();
        $group->name       = $request->name;
        $group->slug      = $request->slug;
        $group->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $group->save();
    }
    public function update($request, $id)
    {
        $group             = Groups::find($id);
        $group->name       = $request->name;
        $group->slug      = $request->slug;
        $group->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $group->save();
    }
    public function edit($id)
    {
        return Groups::find($id);
    }
    public function destroy($id)
    {
        $group = Groups::find($id);
        $group->delete();
    }
    public function search()
    {
    }
}
