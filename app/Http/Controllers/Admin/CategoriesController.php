<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Products;
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
        $this->authorize('product-show', 'product-show');
        $categories = $this->categoryService->getAll($request);
        $categories_arr = $this->categoryService->categories_arr();
        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if(isset($request->sort_by)){
            $sort_by =$request->sort_by;
              if($sort_by=='newest'){
              $categories = Category::orderBy('id','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ cũ đến mới';
          }
          elseif($sort_by=='latest'){
              $categories = Category::orderBy('id','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ mới đến cũ';
          }
          elseif($sort_by=='name_a_to_z'){
              $categories = Category::orderBy('name','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Tên A đến Z';
          }
          elseif($sort_by=='name_z_to_a'){
              $categories = Category::orderBy('name','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Tên Z đến A';
          }
          elseif($sort_by=='category_a_to_z'){
              $categories = Category::orderBy('parent_id','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Danh mục sản phẩm từ A đến Z';
          }
          elseif($sort_by=='category_z_to_a'){
              $categories = Category::orderBy('parent_id','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Danh mục sản phẩm từ Z đến A';
          }
      };
      
        
     
        $params = [
            'categories'        => $categories,
            'categories_arr'    => $categories_arr,
            'sort_by' => $sort_by,
            'name_sort' => $name_sort,
           
           
        ];
        return view('admin.categories.index', $params);
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

    public function seach(Request $request)
    {
        $categories =  $this->categoryService->seach($request->type_seach, $request->seach_data);
        $categories_arr = $this->categoryService->categories_arr();
        $params = [
            "categories" => $categories,
            "categories_arr" => $categories_arr
        ];
        return view('admin.categories.seach', $params)->render();
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
        return redirect()->route('categories.index')->with('status', 'Thêm danh mục sản phẩm thành công !');
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
        $categories = $this->categoryService->create_category();
        $category = $this->categoryService->edit($id);
        $params = [
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
        return redirect()->route('categories.index')->with('status', 'Cập nhật danh mục sản phẩm thành công!');
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
        try {
            $this->categoryService->destroy($id);
            return redirect()->route('categories.index')->with('status', 'Xóa sản phẩm thành công !');
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
    // return redirect()->route('categories.index')->with('status', 'Xóa sản phẩm thành công !');

}
