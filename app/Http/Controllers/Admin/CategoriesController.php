<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
class CategoriesController extends Controller
{   
    private $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoryService->getAll($request);
        $categories_arr = $this->categoryService->categories_arr();
        
        $params = [
            'categories'        => $categories,
            'categories_arr'    => $categories_arr,
        ];
        return view('admin.categories.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->create();
       
        return view('admin.categories.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->categoryService->store($request);
        return redirect()->route('categories.index')->with('status','Thêm danh mục sản phẩm thành công !');
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
    public function edit($id )
    {
        $categories = $this->categoryService->create_category();
        $category = $this->categoryService->edit($id);
        $params=[
            'categories' => $categories,
            'category'   => $category
        ];
        return view('admin.categories.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        
        $this->categoryService->update($request, $id);
        return redirect()->route('categories.index')->with('status','Cập nhật danh mục sản phẩm thành công!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $check= Attributes::where('category_id','=',$id)->get();
        try{
            $this->categoryService->destroy($id);
            return redirect()->route('categories.index')->with('status', 'Xóa sản phẩm thành công !');
        }
       catch(\Exception $e){
        return redirect()->route('categories.index')->with('status', 'Xóa không thành công! '.$e);
    }
       }
        // return redirect()->route('categories.index')->with('status', 'Xóa sản phẩm thành công !');
    
}
