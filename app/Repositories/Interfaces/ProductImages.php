<?php 

namespace App\Repositories\Interfaces;


Interface ProductImagesInterface {

    public function getAll();
    public function store($request);
    public function update($request, $id);
    public function edit($id); 
    public function destroy($id);
    public function search();
}