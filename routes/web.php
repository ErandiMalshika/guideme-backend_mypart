<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MeetiSlotController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DoneNotificationController;
use App\Http\Controllers\AssignedNotificationController;
use App\Http\Controllers\ParticipatingNotificationController;
use App\Http\Controllers\ReviewNotificationController;
use App\Http\Controllers\SavedJobsController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "hello";
});

Route::post('/home', function () {
    return 'Hello World';
});

Route::post('/mail', function (Request $request) {
    Mail::to($request['email'])
        ->send(new WelcomeMail($request['link']));
    return 'mail sent';
});

Route::resource('categories', CategoryController::class);
Route::resource('jobs', JobController::class);
Route::resource('slot', MeetiSlotController::class);
Route::resource('user', UserController::class);
Route::resource('notification', NotificationController::class);
Route::resource('donenotification', DoneNotificationController::class);
Route::resource('assignednotification', AssignedNotificationController::class);
Route::resource('participatingnotification', ParticipatingNotificationController::class);
Route::resource('reviewnotification', ReviewNotificationController::class);
Route::resource('savedjobs', SavedJobsController::class);
Route::post('slot/add', [MeetiSlotController::class,'add']);
Route::get('notification/get/{id}/{type}', [NotificationController::class,'get_notification']);
Route::get('/search/{id}', [UserController::class,'get_user']);
Route::post('register', function() {
    return ['res'=>'we are here'];
});

Route::get('/token', function () {
    return csrf_token(); 
});


