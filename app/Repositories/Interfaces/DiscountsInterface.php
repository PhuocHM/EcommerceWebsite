<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\DiscountsRequest;

Interface DiscountsInterface {

    public function getAll($request);
    public function store($request);
    public function update(DiscountsRequest $request, $id);
    public function edit($id); 
    public function destroy($id);
    public function create_discount();
}