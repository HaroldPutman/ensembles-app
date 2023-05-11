<?php

use App\Models\Supporter;
use App\Http\Controllers\PHPMailerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.static.welcome');
});

Route::get('/board', function() {
    return view('web.lists.board');
});

Route::get('/classes', function() {
    return view('web.static.classes');
});

Route::get('/events', function() {
    return view('web.static.events');
});

Route::get('/give', function() {
    return view('web.static.give');
});

Route::view('/mission', 'web.static.mission');

Route::get('/notes', function() {
    return view('web.static.notes');
});

Route::get('/supporters', function() {
    return view('web.lists.supporters', [
        'supporters' => Supporter::all()
    ]);
});

Route::get('/teach', function() {
    return view('web.static.teach');
});

Route::get('/volunteer', function() {
    return view('web.static.volunteer');
});

Route::controller(PHPMailerController::class)->group(function () {
    Route::view('/contact-us', 'web.public.contact-us');
    Route::post('/create-lead', 'createLead')-> name('create-lead');
});
