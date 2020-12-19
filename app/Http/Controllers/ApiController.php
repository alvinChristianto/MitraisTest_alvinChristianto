<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Userregist;
use Redirect;


use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
    public function getAllStudents() {
		$students = Student::get()->toJson(JSON_PRETTY_PRINT);
    	return response($students, 200);
	 }

    public function createuser(Request $request) {
     

      $student = new Userregist;
    	$student->firstname = $request->firstname;
    	$student->lastname = $request->lastname;
    	$student->mobilephone = $request->mobilephone;
    	$student->dateofbirth = $request->birthday;
    	$student->gender = $request->gender;
    	$student->email = $request->email;
    	$student->save();
      return redirect('/')->with(['success' => 'Pesan Berhasil']);
      
  		
  	
    }

    public function getStudent($id) {
      	if (Student::where('id', $id)->exists()) {
        $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($student, 200);
      	} else {
        	return response()->json([
          	"message" => "Student not found"
        	], 404);
      	}

    }

    public function updateStudent(Request $request, $id) {
      	if (Student::where('id', $id)->exists()) {
	        $student = Student::find($id);
	        $student->name = is_null($request->name) ? $student->name : $request->name;
	        $student->course = is_null($request->course) ? $student->course : $request->course;
	        $student->save();

        return response()->json([
            "message" => "records updated successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "update Student not found"
        ], 404);
        
    }
    }

    public function deleteStudent ($id) {
      	if(Student::where('id', $id)->exists()) {
        	$student = Student::find($id);
        	$student->delete();

        return response()->json([
          "message" => "records deleted"
        ], 202);
      	} else {
        	return response()->json([
          		"message" => "delet Student not found"
        ], 404);
      	}
    }
}