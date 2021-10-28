<?php 

namespace App\Repositories\Interfaces;


Interface OrderItemsInterface {

    public function getAll($request);
    public function findbyCustomer();
    public function findbyProduct();
    public function update($request, $id);
    public function find($id); 
    public function destroy($id);
}