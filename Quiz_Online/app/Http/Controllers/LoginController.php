<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller{
    
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'Email' => 'required',
                'Password' => 'required|min:3|max:32'
            ],
            [
                'Email.required' => 'Bạn chưa nhập Email',
                'Password.required' => 'Bạn chưa nhập Password',
                'Password.min' => 'Password không được nhỏ hơn 3 ký tự',
                'Password.max' => 'Password không được lớn hơn 32 ký tự'
            ]);
        if (Auth::attempt(['email' => $request->Email, 'password' => $request->Password])) {
            return redirect('index');
        }else{
            return redirect()->back()->with('message','Đăng nhập không thành công');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect('index');
    }
}
