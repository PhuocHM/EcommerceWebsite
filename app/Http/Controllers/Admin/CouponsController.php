<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponsRequest;
use App\Models\Admin\Coupons;
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

        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if (isset($request->sort_by)) {
            $sort_by = $request->sort_by;
            if ($sort_by == 'newest') {
                $coupons = Coupons::orderBy('id', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ cũ đến mới';
            } elseif ($sort_by == 'latest') {
                $coupons = Coupons::orderBy('id', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ mới đến cũ';
            } elseif ($sort_by == 'amounts_a_to_z') {
                $coupons = Coupons::orderBy('amounts', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền giảm từ A đến Z';
            } elseif ($sort_by == 'amounts_z_to_a') {
                $coupons = Coupons::orderBy('amounts', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền giảm từ Z đến A';
            } elseif ($sort_by == 'expired_date_a_to_z') {
                $coupons = Coupons::orderBy('expired_day', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Ngày hết hạn trước->sau';
            } elseif ($sort_by == 'expired_date_z_to_a') {
                $coupons = Coupons::orderBy('expired_day', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Ngày hết hạn sau->trước';
            }
        }

        $params = [
            'coupons' => $coupons,
            'sort_by' => $sort_by,
            'name_sort' => $name_sort

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
