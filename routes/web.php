<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/students', function () {
//     return view('students', [
//         'greetings' => 'hello',
//         'students' => [
//             [
//                 'firstname' => 'bongbong',
//                 'lastname'=> 'duterte'
//             ],
//             [
//                 'firstname' => 'sara',
//                 'lastname'=> 'robredo'
//             ]
//         ]
//     ]);
// });

Route::get('/students', function () {
    return view('students', [
        
        'greetings' => 'hello',

        'students' => [
            [
                'firstname'=> 'bongbong',
                'lastname'=> 'duterte'
            ],
            [
                'firstname'=> 'sarah',
                'lastname'=> 'robredo'
            ],
            [
                'firstname'=> 'bong',
                'lastname'=> 'go'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/profile/{id}', function ($id) {

//             $students = [
//             [   
//                 'id' => '1',
//                 'firstname' => 'bongbong',
//                 'lastname'=> 'duterte'
//             ],
//             [
//                 'id' => '2',
//                 'firstname' => 'sara',
//                 'lastname'=> 'robredo'
//             ]
//             ];

//             $student = Arr::first($students, fn($student) => $student['id'] == $id);


//     return view('profile', ['student' => $student]);
// });
