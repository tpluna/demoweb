<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;

Route::get('/', function () {

    $students = Students::all();

    // dd($students);

    return view('home');
});

Route::get('/students', function () {
    return view('students', [

        'students' => Students::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile/{id}', function ($id) {

    $student = Arr::first(Students::all(), fn($student) => $student['id'] == $id);

    return view('profile', [
        'student' => $student
    ]);

});
