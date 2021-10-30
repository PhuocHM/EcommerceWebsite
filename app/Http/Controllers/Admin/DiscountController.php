<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiscountsRequest;
use App\Services\DiscountsService;
use Illuminate\Http\Request;
use Carbon\Carbon;


// use App\Http\Requests\BrandRequest;

class DiscountController extends Controller
{
    private $discountsService;
    public function __construct(DiscountsService $discountsService)
    {
        $this->discountsService = $discountsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $discounts = $this->discountsService->getAll($request);
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $params = [
            'discounts' => $discounts,
            'today' => $today,
        ];
        return view('admin.discounts.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountsRequest $request)
    {
        $this->discountsService->store($request);
        return redirect()->route('discounts.index')->with('status', 'Thêm chiết giá thành công !');
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
        $discounts = $this->discountsService->create_discount();
        $discount = $this->discountsService->edit($id);
        $params = [
            'discount' => $discount,
            'discounts' => $discounts
        ];
        return view('admin.discounts.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiscountsRequest $request, $id)
    {
        $this->discountsService->update($request, $id);
        return redirect()->route('discounts.index')->with('status','Cập nhật chiết giá thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        try{
            $this->discountsService->destroy($id);
            return redirect()->route('discounts.index')->with('status', 'Xóa chiết khấu thành công !');
        }
       catch(\Exception $e){
        return redirect()->route('discounts.index')->with('status', 'Xóa không thành công! '.$e);
    }
    }
}
