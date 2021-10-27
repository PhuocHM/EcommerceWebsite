<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupsRequest;
use App\Services\GroupsService;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    private $groupsService;
    public function __construct(GroupsService $groupsService)
    {
        $this->groupsService = $groupsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $groups = $this->groupsService->getAll($request);
        $params = [
            'groups' => $groups,
        ];
        return view('admin.groups.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupsRequest $request)
    {
        $this->groupsService->store($request);
        return redirect()->route('groups.index')->with('status', 'Thêm chức vụ quản lý thành công !');
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
        $group = $this->groupsService->edit($id);
        $params = [
            'group' => $group
        ];
        return view('admin.groups.edit', $params);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupsRequest $request, $id)
    {
        $this->groupsService->update($request, $id);
        return redirect()->route('groups.index')->with('status','Cập nhật chức vụ quản lý thành công!'); 
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
            $this->groupsService->destroy($id);
            return redirect()->route('groups.index')->with('status', 'Xóa tài khoản khách hàng thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('groups.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
