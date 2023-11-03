<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('dashboard.index', compact('students'));
    }

    public function uploadForm()
    {
        return view('dashboard.upload');
    }

    public function activities(){
        return view('website.student.activities');
    }

    public function attendance(){
        return view('website.student.attendance');
    }

    public function overal(){
        return view('website.student.overal');
    }

    public function subjects(){
        return view('website.student.subjects');
    }

    public function timed(){
        return view('website.student.timed');
    }

    public function timetable(){
        return view('website.student.timetable');
    }

    public function showAttendanceForm()
    {
        $students = Student::all();

        return view('website.student.attendance', compact('students'));
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            // Validate the uploaded file
            $request->validate([
                'file' => 'required|mimes:pdf,doc,docx|max:2048',
            ]);

            // Store the file
            $path = $request->file('file')->store('uploads', 'public');

            // Save the file path to the database or perform any other necessary operations

            return redirect()->back()->with('success', 'File uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No file was uploaded.');
    }
}
