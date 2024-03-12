<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentListController extends Controller
{
    public function index()
    {
        //
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

        // dump($students_info);

        Student::create($students_info);

        return redirect()->route('home')->with('msg', 'Registration Successfull');
    }
}
