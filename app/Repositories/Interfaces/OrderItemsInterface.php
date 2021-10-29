<?php 

namespace App\Repositories\Interfaces;

Interface OrderItemsInterface {

    public function getAll($request);
    public function findbyProduct();
    public function update($request, $id);
    public function store($request);
    public function find($id); 
    public function destroy($id);
}