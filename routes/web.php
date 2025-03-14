<?php

use App\Http\Controllers\PayPalController;
use App\Http\Controllers\RegistrationController;
use App\Models\Supporter;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Event;
use App\Http\Controllers\ContactUsController;
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
    return view('web.static.classes', [
        'courses' => Course::whereDate('start', '>=', date('Y-m-d'))
         ->orWhere('duration', '=', 99)
         ->orderBy('start')->get(),
    ]);
});

Route::get('/events', function() {
    return view('web.static.events', [
        'events' => Event::whereDate('start', '>=', date('Y-m-d'))->orderBy('start')->get(),
    ]);
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

Route::get('/teachers', function() {
    return view('web.lists.teachers', [
        'teachers' => Teacher::where('active', true)->orderBy('name')->get()
    ]);
});

Route::get('/teach', function() {
    return view('web.static.teach');
});

Route::get('/volunteer', function() {
    return view('web.static.volunteer');
});

Route::view('/piano-camp', 'web.static.piano-camp');

Route::view('/music-camp', 'web.static.music-camp');

Route::view('/art-camp', 'web.static.art-camp');

Route::get('/gallery/rhythm', function() {
    return view('web.art-gallery.rhythm-show');
});

Route::get('/gallery/blue', function() {
    return view('web.art-gallery.blue-show');
});

Route::controller(ContactUsController::class)->group(function () {
    Route::get('contact-us/{context?}', 'contactUs');
    Route::post('/create-lead', 'createLead')-> name('create-lead');
});

Route::controller(RegistrationController::class)->group(function () {
    Route::get('register/{classId}', 'register')->name('register');
    Route::post('register/donate', 'donate')->name('register-donate');
    Route::post('register/create', 'create')->name('register-create');
    Route::post('register/thankyou', 'thankyou')->name('register-thankyou');
    Route::post('register/payment-retry', 'paymentRetry')->name('payment-retry');
});

Route::controller(PayPalController::class)->group(function() {
    Route::post('paypal/create-order', 'createOrder');
    Route::post('paypal/capture-payment', 'capturePayment');
});
