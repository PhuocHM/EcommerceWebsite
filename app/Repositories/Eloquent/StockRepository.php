<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Stocks;
use App\Models\Admin\Suppliers;
use App\Models\Admin\Employees;
use App\Models\Admin\Products;

use App\Repositories\Interfaces\StockRepositoryInterface;
use Carbon\Carbon;

class StockRepository implements StockRepositoryInterface
{
    public function getAll($request)
    {
        $query = Stocks::with('product', 'supplier')->orderBy('id', 'DESC');
        if ($request->stocks) {
            $search = $request->stocks;
            $products_id = Products::where('name', 'LIKE', '%' . $search . '%')->pluck('id')->toArray();
            $employees_id = Employees::where('name', 'LIKE', '%' . $search . '%')->pluck('id')->toArray();
            $suppliers_id = Suppliers::where('name', 'LIKE', '%' . $search . '%')->pluck('id')->toArray();
            $query->whereIn('product_id', $products_id)->orWhere('employee_id',$employees_id)->orWhere('supplier_id',$suppliers_id);
        }
        return $query->paginate(5);
    }

    public function find($id)
    {
        return Stocks::find($id);
    }

    public function store($request)
    {
        Stocks::create($request->only('product_id', 'employee_id', 'quantity', 'supplier_id', 'cost_price'));
    }

    public function update($request, $id)
    {
        Stocks::find($id)->update($request->only('product_id', 'employee_id', 'quantity', 'supplier_id', 'cost_price'));
    }

    public function destroy($id)
    {
        Stocks::find($id)->delete();
    }
    public function supplier()
    {
        return Suppliers::orderBy('id', 'DESC')->get();
    }
    public function employee()
    {
        return Employees::orderBy('id', 'DESC')->get();
    }
    public function product()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
}
