<?php 

namespace App\Repositories\Interfaces;

Interface ProductsInterface {

    public function getAll($request);
    public function store($request);
    public function update($request, $id);
    public function edit($id); 
    public function destroy($id);
    public function create_category();
    public function create_brand();
 
}