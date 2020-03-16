<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function postFeedback(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $feedback=$request->input('feedback');
        $data=array('name'=>$name,'email'=>$email,'telephone'=>$phone,'feedback'=>$feedback);
        DB::table('student')->insert($data);
        echo("hello");
    }

    public function getList(){
        $li=Students::all();
        return view('welcome')->with(['list'=>$li]);
    }
}
