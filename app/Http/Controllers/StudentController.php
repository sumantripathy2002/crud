<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students=student::get();
        return view ('index',compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:students|max:255',
            'email' => 'required',
        ]);
    
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->save();
        
        return redirect()->route('student.listing');
    }

    public function edit($id)
    
    {
          $student = Student::findOrFail($id);
            return view('edit', compact('student'));
    }

    
    public function update(Request $request,$id)
    
    {
          $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->update();
        return redirect()->route('student.listing');
    }


    public function delete($id){
            $student = Student::findOrFail($id);
            $student->delete();
            return redirect()->route('student.listing');
    
    }
    
    
}

