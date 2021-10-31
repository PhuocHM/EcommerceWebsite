<?php

namespace App\Repositories\Eloquent;
    
use Illuminate\Http\Request;
use App\Models\Admin\Attributes;
use App\Models\Admin\Category;
use App\Repositories\Interfaces\AttributesInterface;
use Carbon\Carbon;

class AttributesRepository implements AttributesInterface
{

    public function getAll(Request $request)
    {
        $query = Attributes::with('category');
        if ($request->category_id && $request->attribute =='') {
            $category_id = $request->category_id;
            $query->where('category_id',$category_id);
        }
        if ($request->attribute && $request->category_id =='') {
            $search = $request->attribute;
            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        if($request->attribute && $request->category_id){
            $category_id = $request->category_id;
            $search = $request->attribute;
            $query->where('category_id',$category_id)->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(5);
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
        return Attributes::find($id);
    }
}
