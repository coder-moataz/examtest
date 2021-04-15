<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function Index(){
        return view('welcome');
    }
    public function getalldata(){
        $exam = DB::table('exam')->get();
        return view('admin',compact('exam'));
    }
    public function Insertexam(Request $request){
        $validatedata = $request->validate([
             'first_name'=> 'required',
             'sec_name'=>'required',
             'email'=> 'required|email',
             'password'   => 'required|min:8|max:24',
             'question1' => 'required|int',
             'question2' => 'required|int',
             'question3' => 'required|int',
             'question4' => 'required|int',
         ]);
        DB::table('exam')->insert([
            'Firstname' => $request->first_name,
            'Secondname' => $request->sec_name,
            'email' => $request->email,
            'password' => $request->password,
            'question1'=> $request->question1,
            'question2'=> $request->question2,
            'question3'=> $request->question3,
            'question4'=> $request->question4,
        ]);
         return back()->with('exam_submitted','Exam submitted successfully contact you mr for the results good luck');
    }
    public function deleteExam($id){
        DB::table('exam')->where('id',$id)->delete();
        return back()->with('exam_delete','exam deleted succesfuly');
    }
    public function getExambyid($id){
        $exam = DB::table('exam')->where('id',$id)->first();
        return view('single-exam',compact('exam'));
    }
}
