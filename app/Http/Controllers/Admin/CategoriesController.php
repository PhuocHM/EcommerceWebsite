<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
    public function index()
    {
        $categories = $this->categoryService->getAll();
        $categories_arr = $categories->pluck('name','id')->toArray();
        $categories_arr = ['Danh mục cha'] + $categories_arr;
    

        $params = [
            'categories' => $categories,
            'categories_arr' => $categories_arr,
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
        $categories= Category::orderBy('id','DESC')->get();
        // dd($category);
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
        $categories =$this->categoryService->store($request);
        return redirect()->back()->with('status','Thêm danh mục sản phẩm thành công');
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
        $categories = $this->categoryService->getAll();

        $category = Category::find($id);
        $params=[
            'categories' => $categories,
            'category' => $category
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
        return redirect()->route('categories.index')->with('success','Cập nhật danh mục sản phẩm thành công!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('status', 'Xóa sản phẩm thành công !');
    }
}
