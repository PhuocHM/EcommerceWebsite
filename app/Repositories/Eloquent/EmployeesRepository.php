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

            $query->where('name', 'LIKE', '%' . $search . '%');
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
        $data = $request->only('name','slug','mail','password','birthday','address','identification','group_id');
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'images/product/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
          
            $data['image'] = $new_image;
        } 
        Employees::create($data);
    }
    public function update($request, $id)
    {
        $employee             = Employees::find($id);
        $employee->name       = $request->name;
        $employee->slug      = $request->slug;
        $employee->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $employee->save();
    }
    public function edit($id)
    {
        return Employees::find($id);
    }
    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
    }
    public function search()
    {
    }
}
