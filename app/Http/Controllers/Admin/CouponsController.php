<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponsRequest;
use App\Services\CouponsService;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    private $couponsService;
    public function __construct(CouponsService $couponsService)
    {
        $this->couponsService = $couponsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coupons = $this->couponsService->getAll($request);
        $params = [
            'coupons' => $coupons,
        ];
        return view('admin.coupons.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponsRequest $request)
    {
        $this->couponsService->store($request);
        return redirect()->route('coupons.index')->with('status', 'Thêm mới thẻ giảm giá thành công');
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
        $coupon = $this->couponsService->find($id);
        $params = [
            'coupon' => $coupon
        ];
        return view('admin.coupons.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponsRequest $request, $id)
    {
        $this->couponsService->update($request, $id);
        return redirect()->route('coupons.index')->with('status', 'Chỉnh sửa thẻ giảm giá thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->couponsService->destroy($id);
        return redirect()->route('coupons.index')->with('status', 'Xóa thẻ giảm giá thành công');
    }
}
