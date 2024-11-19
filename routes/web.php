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

        'students' => [
            [
                'id' => '01',
                'firstname' => 'bongbong',
                'lastname' => 'duterte'
            ],
            [
                'id' => '02',
                'firstname' => 'sarah',
                'lastname' => 'robredo'
            ],
            [
                'id' => '03 ',
                'firstname' => 'bong',
                'lastname' => 'go'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile/{id}', function ($id) {

    $students = [
        [
            'id' => '01',
            'firstname' => 'bongbong',
            'lastname' => 'duterte'
        ],
        [
            'id' => '02',
            'firstname' => 'sarah',
            'lastname' => 'robredo'
        ],
        [
            'id' => '03 ',
            'firstname' => 'bong',
            'lastname' => 'go'
        ]
    ];

    $student = Arr::first($students, fn($student) => $student['id'] == $id);

    return view('profile', [
        'student' => $student
    ]);

});