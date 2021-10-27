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

        if ($request->product) {
            $search = $request->product;
            $query->product->where('name', 'LIKE', '%' . $search . '%');
        }
        return $query->paginate(2);
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
