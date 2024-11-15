<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile/{id}', function ($id) {

    $students = [
        [
            'id' => '01',
            'firstname'=> 'bongbong',
            'lastname'=> 'duterte'
        ],
        [
            'id' => '02',
            'firstname'=> 'sarah',
            'lastname'=> 'robredo'
        ],
        [
            'id' => '03',
            'firstname'=> 'bong',
            'lastname'=> 'go'
        ]
        ];

    $student = Arr::first($students, fn($student) => $student['id'] == $id);

    return view('profile', [
        'student' => $student
    ]);
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

        'students' => [
            [
                'id' => '01',
                'firstname'=> 'bongbong',
                'lastname'=> 'duterte'
            ],
            [
                'id' => '02',
                'firstname'=> 'sarah',
                'lastname'=> 'robredo'
            ],
            [
                'id' => '03',
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
