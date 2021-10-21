<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Request;

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
        $categories_arr =array_merge(['0'=> 'Danh Mục cha'], $categories_arr);
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
    public function store(Request $request)
    {
        $category = new Category();
        $category->name    = $request['name'];
        $category->slug    = $request['slug'];
        $category->description  = $request['description'];
        $category->parent_id  = $request['parent_id'];
        $category->status  = $request['status'];
    
        $category->save();
        // $category = new Category();
        // $category ->Category::create($request->all());
        // $request->session()->flash('success', 'Thêm danh mục thành công');
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
        return view('admin.categories.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->categoryService->update($request, $id);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
