<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function homePage(Request $request){

    	$students = Student::all();
    	return view('complete',compact('students'));
    }
    public function regProcess(Request $request){
    	$id = $request->id;
    	$id_number = $request->id_number;
    	$first_name = $request->first_name;
    	$last_name = $request->last_name;
    	$course = $request->course;
    	$city = $request->city;
    	$guardian = $request->guardian;
    	$contact_number = $request->contact_number;

    	$student = new Student;

    	$student->id = $id;
    	$student->id_number = $id_number;
    	$student->first_name = $first_name;
    	$student->last_name = $last_name;
    	$student->course = $course;
    	$student->city = $city;
    	$student->guardian = $guardian;
    	$student->contact_number = $contact_number;
    	$student->save();

    	$students = Student::all();
    	return view('complete',compact('students'),[
    		'id' => $id,
    		'id_number' => $id_number,
    		'first_name' => $first_name,
    		'last_name' => $last_name,
    		'course' => $course,
    		'city' => $city,
    		'guardian' => $guardian,
    		'contact_number' => $contact_number
    	]);
    }
    public function addStudent(Request $request){
    	$students = Student::all();
    	return view('reg',compact('students'));
    }
    public function upDate(Request $request,$id){

    	$students = Student::find($id);
    	return view('edit',compact('students'));
    }
    public function save(Request $request){
    	$id = $request->id;
    	$id_number = $request->id_number;
    	$first_name = $request->first_name;
    	$last_name = $request->last_name;
    	$course = $request->course;
    	$city = $request->city;
    	$guardian = $request->guardian;
    	$contact_number = $request->contact_number;

    	$student = Student::find($id);

    	$student->id = $id;
    	$student->id_number = $id_number;
    	$student->first_name = $first_name;
    	$student->last_name = $last_name;
    	$student->course = $course;
    	$student->city = $city;
    	$student->guardian = $guardian;
    	$student->contact_number = $contact_number;
    	$student->save();
    	
    	$students = Student::all();
    	return view('complete',compact('students'));
    }
    public function processDelete($id){
    	
    	$students = Student::find($id)
    	->delete();

    	$students = Student::all();
    	return view('complete',compact('students'));	
    }
}