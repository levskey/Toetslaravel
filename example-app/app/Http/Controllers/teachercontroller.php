<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subjects')->orderBy('name')->get();

        return view('teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $teacher = Teacher::with('subjects')->findOrFail($id);

        return view('teachers.show', compact('teacher'));
    }
}
