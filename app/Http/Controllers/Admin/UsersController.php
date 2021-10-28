<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $usersService;
    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->usersService->getAll($request);
        $params = [
            'users' => $users,
        ];
        return view('admin.users.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $this->usersService->store($request);
        return redirect()->route('users.index')->with('status', 'Thêm tài khoản khách hàng thành công !');
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
        $user = $this->usersService->edit($id);
        $params = [
            'user' => $user
        ];
        return view('admin.users.edit', $params);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $this->usersService->update($request, $id);
        return redirect()->route('users.index')->with('status','Cập nhật tài khoản khách hàng thành công!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->usersService->destroy($id);
            return redirect()->route('users.index')->with('status', 'Xóa tài khoản khách hàng thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('users.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
