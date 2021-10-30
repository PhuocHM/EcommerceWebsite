<?php 

namespace App\Repositories\Interfaces;

Interface AttributesInterface {

    public function getAll($request);
    public function store($request);
    public function update($request, $id); 
    public function create();
    public function edit($id);
    public function destroy($id);
  
}