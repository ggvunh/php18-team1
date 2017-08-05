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
use notificationMgs;

class UserController extends Controller
{   

  public function getregister()
  {
    return view('auth.register');
  }

  public function postregister(RegisterFormRequest $request)
  {
    {
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->phone = $request->phone;
      $user->address = $request->address;
    }
    {
      notificationMgs('success','Bạn đã đăng kí thành công');  
      $user->save();
      return redirect('/');
    }   
  }

    //LOGIN
  public function postlogin(LoginFormRequest $request)
  { 
    if(Auth::attempt(['email'=>$request->email,'password'=>($request->password)]))
    {   
     notificationMgs('success','Bạn đã đăng nhập thành công'); 
     return redirect('/');
   }}
   public function getlogin()
   {
    return view('auth.login');
  }
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function listUsers()
  {
    $users = User::all();
    return view('backend.listadmin.listusers')->with('users',$users);
  }
      //Sua thong tin nguoi dung
  public function info($id)
  {   $user = User::find($id);
    return view('profile.info',['user'=>$user]);
  }
  public function updateinfo(Request $request,$id)
  { 
    $user = User::find($id); 
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->address = $request->address;

    if($request->changepassword)
    {
      $this->validate($request,
        [
        'changepassword' => 'required|min:3|max:32',
        're_password' => 'required'
        ],
        [
        'password.required' => 'Bạn chưa nhập mật khâu',
        'password.min' => 'Mật khẩu phải nhiều hơn 3 kí tự',
        'password.max' => 'Mật khẩu không được quá 32 kí tự',
        're_password.require' => 'Bạn chưa nhập lại mật khẩu',
        're_password.same' => 'Mật khẩu nhập lại chưa khớp'
        ]);
      $user->password = bcrypt('$request->changepassword');
    }
        //notificationMgs('success','Bạn đã thay đổi thông tin thành công');  
    $user->save();
    return redirect('order/profile')->with('thongbao', 'Bạn đã sửa thành công');
  }
}
