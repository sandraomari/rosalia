<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;

class StudentController extends Controller
{
   
    public function save(Request $req)
    {
        $validatedData = $req->validate([
        'student_no'=>'required|unique:students|max:255',
        'Name'=>'required',
        'Physical_Address'=>'required',
        'DOB'=>'required',

        ]);

        $student_no = $req->input('student_no');
        $Name=$req->input('Name');
        $Physical_Address=$req->input('Physical_Address');
        $DOB=$req->input('DOB');

        $data = array('student_no' =>$student_no,'Name'=>$Name,'Physical_Address'=>$Physical_Address,'DOB'=>$DOB );

        DB::table('students')->insert($data);

        echo "<script>alert('successfully registered student')</script>";
        return view('rosalia_mwai.student');
    }
}
