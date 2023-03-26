<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // public function create(Request $request){
       
    //     $students = Student::all();
    //     $students->fname = $request->input('fname');
    //     $students->lname = $request->input('lname');
    //     $students->email = $request->input('email');
    //     $students->password = $request->input('password');
    //     $students->save();
    //     return response()->json($students);
    // }

    public function index(){
        $students =Student::all();
        if(count() > 0){
            return rsponse()->json([
                'status'=>200,
                'students'=>$student
            ],200);

        }else{
            return rsponse()->json([
                'status'=>404,
                'students'=>'No records found'
            ],404);
        }
    }
   
}
