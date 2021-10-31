<?php 

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

Interface AttributesInterface {

    public function getAll(Request $request);
    public function store($request);
    public function update($request, $id); 
    public function create();
    public function edit($id);
    public function destroy($id);
  
}