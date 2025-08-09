<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;


Route::get('/', function () {
    $path = public_path('txt/about.txt');
    $contents = file_get_contents($path);
    // return view('welcome');
    $path = public_path('txt/sessions.txt');

    if (file_exists($path)) {
        $embed = File::get($path);
        $sessions = preg_split('/\R{2,}/', trim($embed));
    } else {
        $sessions = [];
    }

    return view('index', ['contents' => $contents, 'sessions' => $sessions]);
});

Route::get('/download-resume', function() {
    $path = public_path('files/resume.pdf');
    return Response::download($path, 'ROSERO_RESUME.pdf');
});
