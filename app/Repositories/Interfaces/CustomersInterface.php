<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\CustomersRequest;

Interface CustomersInterface {

    public function getAll($request);
    public function store($request);
    public function update($request, $id);
    public function edit($id); 
    public function destroy($id);
    public function create_user();
    public function create();
  
}