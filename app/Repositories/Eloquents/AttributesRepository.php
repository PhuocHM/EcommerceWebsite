<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\Attributes;

use App\Repositories\Interfaces\AttributesInterface;
use Carbon\Carbon;
class AttributesRepository implements AttributesInterface {

    public function getAll(){

        return Attributes::all();
    }
    public function getOne(){

    }
    public function store( $request){
        $attributes = new Attributes();
        $attributes->name    = $request->name;
        $attributes->slug    = $request->slug;
        $attributes->category_id  = $request->category_id;
        $attributes->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $attributes->save();
    }
    public function update($request, $id){
        $attributes = Attributes::find($id);
        $attributes->name  = $request->name;
        $attributes->slug    = $request->slug;
        $attributes->category_id = $request->category_id;
        $attributes->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $attributes->save();  
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}