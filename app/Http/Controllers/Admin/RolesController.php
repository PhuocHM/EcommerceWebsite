<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolesRequest;
use App\Services\RolesService;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    private $rolesService;
    public function __construct(RolesService $rolesService)
    {
        $this->rolesService = $rolesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = $this->rolesService->getAll($request);
        $params = [
            'roles' => $roles,
        ];
        return view('admin.roles.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolesRequest $request)
    {
        $this->rolesService->store($request);
        return redirect()->route('roles.index')->with('status', 'Thêm vai trò quản lý thành công !');
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
        $role = $this->rolesService->edit($id);
        $params = [
            'role' => $role
        ];
        return view('admin.roles.edit', $params);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rolesRequest $request, $id)
    {
        $this->rolesService->update($request, $id);
        return redirect()->route('roles.index')->with('status','Cập nhật vai trò quản lý thành công!');   
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
            $this->rolesService->destroy($id);
            return redirect()->route('roles.index')->with('status', 'Xóa tài khoản khách hàng thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('roles.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
