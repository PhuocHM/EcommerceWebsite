<?php 

namespace App\Repositories\Interfaces;


Interface OrdersInterface {

    public function getAll($request);
    public function store($request);
    public function update($request, $id);
    public function find($id); 
    public function destroy($id);
}