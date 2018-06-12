<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Fees;
use App\Student;


class FeesController extends Controller
{
    public function save(Request $req)
    {
        $validatedData = $req->validate([
        'student_no'=>'required|unique:students|max:255',
        'Name'=>'required',
        'Payment_Date'=>'required',
        'Amount'=>'required',

        ]);

        $student_no = $req->input('student_no');
        $Name=$req->input('Name');
        $Payment_Date=$req->input('Payment_Date');
        $Amount=$req->input('Amount');

        $data = array('student_no' =>$student_no,'Name'=>$Name,'Payment_Date'=>$Payment_Date,'Amount'=>$Amount);

        DB::table('fees')->insert($data);

        echo "<script>alert('successfully Paid Fees')</script>";
        return view('rosalia_mwai.fees');
    
    }
    public function search(Request $req)
    {
        $student_no =$req->input('student_no');

        $payment = Fees::where('student_no',$student_no)->get();

        $sum = $payment->sum('Amount');

        return view('rosalia_mwai.studentsearch',compact('payment'),compact('sum'));



    }
    public function allstudentsfees()
    {
        $payment = Fees::all();
        $sum = $payment->sum('Amount');

        return view('rosalia_mwai.viewstudents',compact('payment'),compact('sum'));
    }
    //
}
