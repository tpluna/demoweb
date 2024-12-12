<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(): View
    {
        return view('teachers.index', [
            'teachers' => Teacher::latest()->simplePaginate(2)
        ]);
    }

    public function show(Teacher $teacher): View
    {
        return view('teachers.show', [
            'teacher' => $teacher
        ]);
    }

    public function create(): View
    {
        return view('teachers.create');
    
    }

    public function store() {

        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'position' => 'required'
        ]);
    
        Teacher::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'position' => request('position')
        ]);

        return redirect('teachers');
    }

    public function destroy(Teacher $teacher) {

    
        Teacher::delete();

        return redirect('teachers');
    }

    public function edit(Teacher $teacher): View {
        return view('teachers.edit', [
            'teacher' => $teacher
        ]);
    }

}
