<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Students;
use App\Models\Teachers;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


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

//ShowTeachers

Route::get('/teachers', function () {
    return view('teachers', [
        'teachers' => Teachers::latest()->simplePaginate(10)
    ]);
});


Route::get('/teacher/{id}', function ($id) {

    $teachers = Teachers::all();

    $teacher = Arr::first($teachers, fn($teacher) => $teacher['id'] == $id);

    return view('teacher', [
        'teacher' => $teacher
    ]);
});


//CreateTeacher
Route::post('/teachers', function () {

    request()->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'position' => 'required'
    ]);

    Teachers::create([
        'firstname' => request('firstname'),
        'lastname' => request('lastname'),
        'email' => request('email'),
        'position' => request('position')
    ]);

    return redirect('teachers');

});

Route::get('/teachers/create', function () {
    return view('createTeacher');
});

//Update Teacher Profile
Route::get('/teacher/{id}/edit', function ($id) {

    $teachers = Teachers::all();

    $teacher = Arr::first($teachers, fn($teacher) => $teacher['id'] == $id);

    return view('updateteacher', [
        'teacher' => $teacher
    ]);
});

Route::patch('/teacher/{id}', function ($id) {

    $teacher = Teachers::findOrFail($id);

    $teacher->update([
        'firstname' => request('firstname'),
        'lastname' => request('lastname'),
        'email' => request('email'),
        'position' => request('position')
    ]);

    return redirect('/teacher/' . $teacher->id);
});

Route::delete('/teacher/{id}', function ($id) {

    Teachers::findOrFail($id)->delete();

    return redirect('/teachers');
});



