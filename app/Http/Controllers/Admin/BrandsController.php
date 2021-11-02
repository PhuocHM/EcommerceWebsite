<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Services\BrandService;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;


// use App\Http\Requests\BrandRequest;

class BrandsController extends Controller
{
    private $brandService;
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = $this->brandService->getAll($request);
        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if(isset($request->sort_by)){
            $sort_by =$request->sort_by;
              if($sort_by=='newest'){
              $brands = Brand::orderBy('id','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ cũ đến mới';
          }
          elseif($sort_by=='latest'){
              $brands = Brand::orderBy('id','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ mới đến cũ';
          }
          elseif($sort_by=='name_a_to_z'){
              $brands = Brand::orderBy('name','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Tên thương hiệu A đến Z';
          }
          elseif($sort_by=='name_z_to_a'){
              $brands = Brand::orderBy('name','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Tên thương hiệu Z đến A';
          }
       
      };
        $params = [
            'brands' => $brands,
            'sort_by' => $sort_by,
            'name_sort' => $name_sort,
        ];
        return view('admin.brands.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $this->brandService->store($request);
        return redirect()->route('brands.index')->with('status', 'Thêm thương hiệu thành công !');
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
        $brand = $this->brandService->edit($id);
        $params = [
           
            'brand' => $brand
        ];
        return view('admin.brands.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $this->brandService->update($request, $id);
        return redirect()->route('brands.index')->with('status','Cập nhật thương hiệu thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->brandService->destroy($id);
        return redirect()->route('brands.index')->with('status', 'Xóa thương hiệu thành công !');
    }
}
