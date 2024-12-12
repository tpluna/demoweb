<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Students;
use App\Models\Teacher;
use App\Http\Controllers\TeacherController;


Route::view('/', 'home');

Route::view('/contact', 'contact');

//ShowStudentProfile
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

        'students' => Students::latest()->paginate(4)

    ]);
});

//CreateStudent
Route::post('/students', function () {

    Students::create([
        'firstname' => request('firstname'),
        'lastname' => request('lastname'),
        'email' => request('email')
    ]);

    return redirect('students');

});

Route::get('/createstudent', function () {

    return view('createstudent');

});

Route::resource('teachers', TeacherController::class);




