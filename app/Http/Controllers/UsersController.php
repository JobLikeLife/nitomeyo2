<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users/create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));//用户数据与视图绑定
    }

    //对用户输入的数据进行验证，在验证成功后再将数据存入数据库.验证方式 -validator
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6|max:50',//存在|长度
            'email' => 'required|email|unique:users|max:255',//存在|正则格式|用户唯一|长度
            'password' => 'required|confirmed|min:6'//存在|两次匹配|长度
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            ]);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');    
        return redirect()->route('users.show', [$user]);
    }

}
