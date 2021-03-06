<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\ProductAttributesRequest;

Interface ProductAttributesInterface {

    public function getAll($request);
    public function create_product();
    public function create_attribute();
    public function store($request);
    public function update($request, $id); 
    public function edit($id);
    public function destroy($id);
  
}