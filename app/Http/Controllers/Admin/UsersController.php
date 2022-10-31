<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    protected $UserService;

    public function __construct(UserServiceInterface $UserService){
        $this->UserService = $UserService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $users = $this->UserService->getAll($request);
          
            $params = [
                'users'=> $users
            ];
        return view ('Backend.Admin.Users.Index', $params);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Admin.Users.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $this->UserService->store($request);
        return redirect()->route('users.index')->with('success', 'Thêm nhân viên' .$request->name. 'thành công');
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
        $user = User::find($id);
        $params = [
            'user'=>$user
        ];
        return view ('Backend.Admin.Users.Edit',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {   
        // echo __METHOD__;
        // die();
        $this->UserService->update($request, $id);
        return redirect()->route('users.index')->with('success','Cập nhật nhân viên'.$request->name. 'thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->UserService->destroy($id);
        return redirect()->route('users.index')->with('danger', 'Xóa nhân viên thành công');
    }
}
