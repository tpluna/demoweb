<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Students;
use App\Models\Teachers;


Route::get('/', function () {
    return view('home');
});

Route::get('/profile/{id}', function ($id) {

    $students = Students::all();

    $student = Arr::first($students, fn($student) => $student['id'] == $id);

    if (!$student) {
        return abort(404, 'wara yaon siya');
    }

    return view('profile', [
        'student' => $student
    ]);
});

Route::get('/students', function () {
    return view('students', [

        'students' => Students::all()

    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/teachers', function () {
    return view('teachers', [
        'teachers' => Teachers::paginate(5)
    ]);
});

Route::get('/teacher/{id}', function ($id) {

    $teachers = Teachers::all();
    
    $teacher = Arr::first($teachers, fn($teacher) => $teacher['id'] == $id);

    return view('teacher', [
        'teacher' => $teacher
    ]);
});

