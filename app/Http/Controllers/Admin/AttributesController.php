<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AttributesService;
use Illuminate\Http\Request;

use App\Http\Requests\AttributesRequest;


class AttributesController extends Controller
{
    private $attributesService;
    public function __construct(AttributesService $attributesService)
    {
        $this->attributesService = $attributesService;
    }
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $attributes = $this->attributesService->getAll($request);
        $params = [
            'attributes' => $attributes,
        ];
        return view('admin.attributes.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->attributesService->create();
        $params = [
            'categories' => $categories,
        ];
        return view('admin.attributes.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributesRequest $request)
    {
        $attributes = $this->attributesService->store($request);
        return redirect()->route('attributes.index')->with('status', 'Thêm thuộc tính thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->attributesService->create();
        $attributes = $this->attributesService->edit($id);
        $params = [
            'categories'    => $categories,
            'attributes'    =>  $attributes
        ];
        return view('admin.attributes.edit', $params);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributesRequest $request, $id)
    {

        $this->attributesService->update($request, $id);
        return redirect()->route('attributes.index')->with('status', 'Cập nhật thuộc tính thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->attributesService->destroy($id);
        return redirect()->route('attributes.index')->with('status', 'Xóa thuộc tính thành công !');
    }
}
