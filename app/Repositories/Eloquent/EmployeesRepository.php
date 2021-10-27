<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Employees;
use App\Models\Admin\Groups;
use App\Repositories\Interfaces\EmployeesInterface;
use Carbon\Carbon;

class EmployeesRepository implements EmployeesInterface
{
    public function getAll($request)
    {
        $query = Employees::orderBy('id', 'DESC');
        if ($request->employee) {
            $search = $request->employee;

            $query->where('name', 'LIKE', '%' . $search . '%')->orWhere('mail', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function create_group()
    {
        return Groups::orderBy('id', 'DESC')->get();
    }
    public function store($request)
    {
        $data = $request->only('name', 'slug', 'mail', 'password', 'birthday', 'address', 'identification', 'group_id');
        $file = $request->image;
        if (!$request->hasFile('image')) {
            $data['image'] = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time() + 2;
            $newFileName = "$fileName.$fileExtension";
            $request->file('image')->move(public_path('images/employee'), $newFileName);
            $data['image'] = $newFileName;
        }
        Employees::create($data);
    }
    public function edit($id)
    {
        return Employees::find($id);
    }

    public function update($request, $id)
    {
        $data = $request->only('name', 'slug', 'mail', 'password', 'birthday', 'address', 'identification', 'group_id');
        $file = $request->image;
        if (!$request->hasFile('image')) {
            $data['image'] = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time() + 2;
            $newFileName = "$fileName.$fileExtension";
            $request->file('image')->move(public_path('images/employee'), $newFileName);
            $data['image'] = $newFileName;
        }
        Employees::find($id)->update($data);
    }

    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
    }
}
