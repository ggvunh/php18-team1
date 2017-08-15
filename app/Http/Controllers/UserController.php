<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use App\User;
use Hash;
use notificationMgs;
use Gloudemans\Shoppingcart\Facades\Cart;

class UserController extends Controller
{

  public function getregister(){
    return view('auth.register');
  }

  public function postregister(RegisterFormRequest $request){
    {
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->phone = $request->phone;
      $user->address = $request->address;
    }
    {

      Auth::check() == true;
      notificationMgs('success','Bạn đã đăng kí thành công');
      $user->save();
      return redirect('/');


    }
  }

    //LOGIN
  public function postlogin(LoginFormRequest $request){
    if(Auth::attempt(['email'=>$request->email,'password'=>($request->password)]))
    {
      $user = Auth::user();
      if($user->is_admin == 0)
      {
       notificationMgs('success','Chào Admin');
       return redirect('/');
     }else
     {
      notificationMgs('success','Bạn đã đăng nhập thành công');
      return redirect('/orderspending');
    }
  }
  else
  {
     notificationMgs('error','Bạn đăng nhập không thành công');
     return redirect('/login');
  }
}
public function getlogin(){
  return view('auth.login');
}
public function logout()
{
  Auth::logout();
  Cart::destroy();
  return redirect('/');
}

public function listUsers(){
  $users = User::paginate(10);
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
  $user->save();
  return redirect('order/profile')->with('thongbao', 'Bạn đã sửa thành công');
  }
  public function pass($id)
  {
  $user = User::find($id);
  return view('profile.changepassword',['user'=>$user]);
  }
  public function changepass(Request $request,$id)
  {
    $oldPassword = $request->oldPassword;
    $newPassword = $request->newPassword;

    if(!Hash::check($oldPassword, Auth::user()->password)){   
      notificationMgs('success','Mật khẩu bạn nhập không đúng');
     }
     else{
      $request->user()->fill(['password' => Hash::make($newPassword)])->save();
      //echo 'done';//update password into user table
     };
  notificationMgs('success','Bạn đã thay đổi mật khẩu thành công');
  return back();
  }

  public function searchUser()
  {
    $input = Input::all();
    $key = $input['key'];
    $users = User::where('name','like','%'.$key.'%')->
                    orWhere('email','like','%'.$key.'%')->paginate(10);
    return view('backend.listadmin.listusers')->with('users',$users)->with('key',$key);
  }

}
