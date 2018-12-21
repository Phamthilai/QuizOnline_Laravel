<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Student_test;
use Session;
use DB;
class RegisterController extends Controller
{
   public function getRegister(){
        return view('layouts.front-end.register');
    }
    public function postRegister(Request $req){
        $this->validate($req, 
            [
                'fullname' => 'required',
                'email' => 'required|email|unique:students,email',
                'phone' => 'numeric|required',
                'school' => 'required',
            ],
            [
                'email.required' => 'Vui lòng nhập email!',
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã có người sử dụng'
            ]);
        $student = new Student();
        $student->fullname = $req->fullname;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->school = $req->school;
        $student->active = 1;
        $student->save();
        $student = DB::table('students')->select('id')->orderBy('id','desc')->limit(1)->get();
               foreach($student as $students => $student){

                   $ids = Session::get('id');
                   $ids[] = array(
                       "id" => $student->id,
                   );
                   Session::put('ids', $ids);
               }
        // $student->$ids[0]['id'];
        return redirect(route('infor'))->with('thanhcong', 'Đăng ký thông tin thành công');
    }
}

    


