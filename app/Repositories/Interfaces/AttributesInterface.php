<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\AttributesRequest;

Interface AttributesInterface {

    public function getAll($request);
    public function getOne();
    public function store($request);
    public function update($request, $id); 
    public function search(); 
    public function create();
    public function edit($id);
    public function destroy($id);
  
}