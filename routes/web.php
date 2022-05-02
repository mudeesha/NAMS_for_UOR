<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;

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


Route::get('/',[AdminController::class, 'login']);



Route::get('/profile', function () {
    return view('profile');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/admin/logout',[AdminController::class, 'Logout'])->name('admin.logout');

//User Management All Routes

Route::prefix('users')->group(function(){

    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');

    Route::get('/add',[UserController::class, 'UserAdd'])->name('users.add');

    Route::get('/store',[UserController::class, 'UserStore'])->name('users.store');

    

});
Route::get('/profile',[UserController::class, 'ShowProfile'])->name('Show.Profile');

Route::prefix('temp_user')->group(function(){

    //Route::view('upload','tempory_user/upload');
    Route::post('upload',[App\Http\Controllers\TemporaryUserController::class,'application','id']);

    Route::view('dashboard','tempory_user/index');
    //Route::post('dashboard',[App\Http\Controllers\TemporaryUserController::class,'returnDashboard']);

    //Route::view('dashboard/uploads','tempory_user/upload');

    //Route::get('/upload',[App\Http\Controllers\TemporaryUserController::class, 'toUploadPage'])->name('temp_user.upload');

    Route::view('/application','tempory_user/registration/application');
    Route::post('/application',[App\Http\Controllers\TemporaryUserController::class,'addData']);

    Route::get('/view',[App\Http\Controllers\TemporaryUserController::class, 'tempUserView'])->name('temp_user.view');

    //3-4. Make summary report
    Route::get('/application-summary',[App\Http\Controllers\TemporaryUserController::class, 'applicationSummary']);

    //7. check/setup exam/practical
    Route::get('/desig-setup1',[App\Http\Controllers\TemporaryUserController::class, 'designationSteup1']);

    Route::get('/desig-setup2',[App\Http\Controllers\TemporaryUserController::class, 'designationSteup2']);

    //8. Make exam sitting report
    Route::get('/exam-details',[App\Http\Controllers\TemporaryUserController::class, 'ExamDetails'])->name('temp_user.examdetails');;
    Route::get('/exam-timetable',[App\Http\Controllers\TemporaryUserController::class, 'ExamTimeTable']);

    //8.1.Make exam paper report
    Route::get('/exam-report',[App\Http\Controllers\TemporaryUserController::class, 'ExamReport']);

    //8.1.Make exam paper request report
    Route::get('/paper-making-report',[App\Http\Controllers\TemporaryUserController::class, 'PaperMakingReport']);

    Route::post('/exam-marks',[App\Http\Controllers\TemporaryUserController::class, 'ExamMarks']);
    


    //Route::get('/search',[App\Http\Controllers\TemporaryUserController::class, 'search']);
    //Route::view('/search','ma/registration/vi');
    
});
//Route::view('search','ma/registration/vi');
Route::post('/search',[App\Http\Controllers\TemporaryUserController::class, 'search1']);


//MA
Route::prefix('ma')->group(function(){

    Route::view('/dashboard','ma/index')->name('ma.dashboard');; 

});


//SAR
Route::prefix('sar')->group(function(){

    Route::view('dashboard','sar/index');

    Route::view('reg_dashboard','sar/registration/sar_registration_dashboard');

    Route::get('/view',[App\Http\Controllers\TemporaryUserController::class, 'tempUserView']);

    
});

