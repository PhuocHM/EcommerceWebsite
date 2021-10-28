<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\DiscountProductRequest;

Interface DiscountProductInterface {

    public function getAll();
    public function create_product();
    public function create_attribute();
    public function store($request);
    public function update($request, $id); 
    public function search(); 
    public function edit($id);
    public function destroy($id);
  
}