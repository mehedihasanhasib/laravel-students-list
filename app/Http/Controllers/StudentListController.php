<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentListController extends Controller
{
    public function index()
    {
        $students_list = Student::all();

        return view('dashboard', ['students' => $students_list]);
    }

    public function create(Request $request)
    {
        $students_info = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required',
            'address' => 'required|max:255',
            'contact' => 'required|digits:11'
        ]);

        if ($request->file('profile_picture')) {
            // store to profile picture in public folder
            $file_name = time() . $request->file('profile_picture')->getClientOriginalName();
            $path =  public_path() . '/profile_picture';
            $request->file('profile_picture')->move($path,  $file_name);
            $students_info['profile_picture'] = $file_name;
        }

        Student::create($students_info);

        return redirect()->route('home')->with('msg', 'Registration Successfull');
    }

    public function show($id)
    {
        $student_profile = Student::where('id', $id)->get()->first();
        // dump($student_profile);
        return view('profile', ['student_profile' => $student_profile]);
    }
}
