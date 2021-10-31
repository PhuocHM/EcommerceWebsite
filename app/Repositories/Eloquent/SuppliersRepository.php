<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Suppliers;
use App\Repositories\Interfaces\SupplierRepositoryInterface;
use Carbon\Carbon;

class SuppliersRepository implements SupplierRepositoryInterface
{
    public function getAll($request)
    {
        $query = Suppliers::orderBy('id', 'DESC');

        if ($request->supplier) {
            $search = $request->supplier;
            $query->where('name', 'LIKE', '%' . $search . '%')->orWhere('address', 'LIKE', '%' . $search . '%')->orWhere('phone', 'LIKE', '%' . $search . '%');
        }
        return $query->paginate(5);
    }

    public function find($id)
    {
        return Suppliers::find($id);
    }

    public function store($request)
    {
        Suppliers::create($request->only('name', 'slug', 'address', 'phone'));
    }

    public function update($request, $id)
    {
        Suppliers::find($id)->update($request->only('name', 'slug', 'address', 'phone'));
    }

    public function destroy($id)
    {
        Suppliers::find($id)->delete();
    }
}
