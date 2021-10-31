<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AttributesService;
use Illuminate\Http\Request;
use App\Models\Admin\Attributes;

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
        // $attributes_sort=Attributes::sortable()->paginate(5);
    //     if(isset($request->sort_by)){
    //         $sort_by =$request->sort_by;
    //           if($sort_by=='newest'){
    //           $attributes = Attributes::orderBy('created_at','ASC')->paginate(5)->appends(request()->query());
    //       }
    //       elseif($sort_by=='latest'){
    //           $attributes = Attributes::orderBy('updated_at','DESC')->paginate(5)->appends(request()->query());
    //       }
    //       elseif($sort_by=='name_a_to_z'){
    //           $attributes = Attributes::orderBy('name','ASC')->paginate(5)->appends(request()->query());
    //       }
    //       elseif($sort_by=='name_z_to_z'){
    //           $attributes = Category::orderBy('name','DESC')->paginate(5)->appends(request()->query());
    //       }
    //       elseif($sort_by=='category_a_to_z'){
    //           $attributes = Category::orderBy('category_id ','ASC')->paginate(5)->appends(request()->query());
    //       }
    //       elseif($sort_by=='category_z_to_a'){
    //           $attributes = Attributes::orderBy('category_id ','DESC')->paginate(5)->appends(request()->query());
    //       }
    //   };
        $params = [
            'attributes' => $attributes,
            // 'attributes_sort' => $attributes_sort,
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
