<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class AuthController extends Controller
{

    public function getlogin()
    {

        return view('backend.user.login');

    }

  public function postlogin(Request $request)
  {
    $username=$request->username;
    $password=$request->password;
    echo bcrypt($password);
    $data=array('password'=>$password,'roles'=>1,'status'=>1);
    if(filter_var($username,FILTER_VALIDATE_EMAIL))
    {
        $data['email']=$username;

    }else{
        $data['username']=$username;
    }
    if(Auth::attempt($data))
    {
        return redirect()->route('dashboard.index');

    }
    $error='tai khoan dang nhap khong le';
return view('backend.user.login',compact('error'));
}
public function logout()
{
    Auth::logout();
    return redirect()->route('admin.login');
}
}