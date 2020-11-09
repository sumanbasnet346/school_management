<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
class studentcontroller extends Controller
{
    function index(){
       $student = student::all();
       return view('student',['student'=>$student,'layout'=>'index']);
    }
    function create(){
        $student = student::all();
        return view('student',['student'=>$student,'layout'=>'create']);
     }
    function store(Request $request){
        $student =new student();
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->class = $request->input('class');
        $student->section = $request->input('section');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();
        $request->session()->flash('msg','Added Successfully!!!');
        return redirect('/');
     }
     function show($id){
         $student=student::find($id);
         $students=student::all();
         return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);
     }
     function edit($id){
        $student=student::find($id);
        $students=student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);
     }
     function update(Request $request,$id){
        $student=student::find($id);
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->class = $request->input('class');
        $student->section = $request->input('section');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();
        $request->session()->flash('msg','Upated Successfully!!!');
        return redirect('/');
     }
     function destroy(Request $request,$id){
         $student=student::find($id);
         $student->delete();
         $request->session()->flash('msg','Deleted successfully!!!');
         return redirect('/');
     }
}
