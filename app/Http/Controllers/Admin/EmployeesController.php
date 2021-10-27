<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\EmployeesService;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $employeesService;
    public function __construct(EmployeesService $employeesService)
    {
        $this->employeesService = $employeesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = $this->employeesService->getAll($request);
        $params = [
            'employees' => $employees,
        ];
        return view('admin.employees.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = $this->employeesService->create_group();
        $params = [
            'groups' => $groups,
        ];
        return view('admin.employees.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->employeesService->store($request);
        return redirect()->route('employees.index')->with('status', 'Thêm nhân sự thành công !');
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
        $groups = $this->employeesService->create_group();
        $employees = $this->employeesService->edit($id);
        $params = [
            'groups'    => $groups,
            'employees' =>  $employees
        ];
        return view('admin.employees.edit', $params);
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
        $this->employeesService->update($request, $id);
        return redirect()->route('employees.index')->with('status', 'Cập nhật nhân sự thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->employeesService->destroy($id);
            return redirect()->route('employees.index')->with('status', 'Xóa tài khoản khách hàng thành công !');
        } catch (\Exception $e) {
            return redirect()->route('employees.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
