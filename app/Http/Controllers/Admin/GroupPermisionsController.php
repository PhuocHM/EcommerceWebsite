<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\GroupPermisionsService;
use Illuminate\Http\Request;

class GroupPermisionsController extends Controller
{
    private $groupPermisionsService;
    public function __construct(GroupPermisionsService $groupPermisionsService)
    {
        $this->groupPermisionsService = $groupPermisionsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $groupPermisions = $this->groupPermisionsService->getAll($request);
      
        $params = [
            'groupPermisions' => $groupPermisions,
        ];
        return view('admin.groupPermisions.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = $this->groupPermisionsService->findbyGroup();
        $roles     = $this->groupPermisionsService->findbyRole();
        $params = [
            'groups' => $groups,
            'roles' => $roles
        ];
        return view('admin.groupPermisions.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->groupPermisionsService->store($request);
        return redirect()->route('groupPermisions.index')->with('status','Thêm phân quyền quản lý thành công !');
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
        $groups         = $this->groupPermisionsService->findbyGroup();
        $roles       = $this->groupPermisionsService->findbyRole();
        $groupPermision = $this->groupPermisionsService->find($id);
        $params = [
            'groups'         => $groups,
            'roles'          => $roles,
            'groupPermision' => $groupPermision
        ];
    
        return view('admin.groupPermisions.edit', $params);
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
        $this->groupPermisionsService->update($request, $id);
        return redirect()->route('groupPermisions.index')->with('status','Cập nhật phân quyền quản lý thành công!');
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
            $this->groupPermisionsService->destroy($id);
            return redirect()->route('groupPermisions.index')->with('status', 'Xóa phân quyền quản lý thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('groupPermisions.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
