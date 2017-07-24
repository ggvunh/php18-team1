<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\MessageBag;
use App\User;
use Hash;

class UserController extends Controller
{
    public function postregister(RegisterFormRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('thongbao','Tạo tài khoản thành công');
    }

    public function getregister()
    {
        return view('auth.register');
    }

    //LOGIN
    public function postlogin(LoginFormRequest $request)
    { 
        if(Auth::attempt(['name'=>$request->name,'email'=>$request->email,'password'=>($request->password)]))
        {
            return redirect('index')->with('thongbao','Bạn đã đăng nhập thành công');

        }
        else
        { 
           return redirect('login');
       }
   }

   public function getlogin()
   {
    return view('auth.login');
    }

    public function listUsers()
    {
        $users = User::all();
        return view('backend.listadmin.listusers')->with('users',$users);
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        redirect('listusers');
    }
}
