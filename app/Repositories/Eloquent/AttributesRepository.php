<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Attributes;
use App\Models\Admin\Category;
use App\Repositories\Interfaces\AttributesInterface;
use Carbon\Carbon;

class AttributesRepository implements AttributesInterface
{

    public function getAll($request)
    {
        $query = Attributes::with('category');
        if ($request->attribute) {
            $search = $request->attribute;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(10);
    }

    public function store($request)
    {
        $attributes = new Attributes();
        $attributes->name    = $request->name;
        $attributes->slug    = $request->slug;
        $attributes->category_id  = $request->category_id;
        $attributes->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $attributes->save();
    }
    public function update($request, $id)
    {
        $attributes = Attributes::find($id);
        $attributes->name  = $request->name;
        $attributes->slug    = $request->slug;
        $attributes->category_id = $request->category_id;
        $attributes->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $attributes->save();
    }
    public function destroy($id)
    {
        $attributes = Attributes::find($id);
        return $attributes->delete();
    }

    public function create()
    {
        return Category::orderBy('id', 'DESC')->get();
    }
    public function edit($id)
    {
        Attributes::find($id);
    }
}
