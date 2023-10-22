<?php

use App\Http\Controllers\EmployeeApplicationController;
use App\Http\Controllers\FormDataController;
use Illuminate\Support\Facades\Route;

// Route::post('/submit', 'FormDataController@store')->name('submit');
Route::post('/submit', [FormDataController::class, 'store'])->name('submit');
Route::get('/quote', 'FormDataController@create')->name('quote');


// Route::post('/submit-employee-application', 'EmployeeApplicationController@submitForm')->name('employee-application.submit');
// Route::post('/employee-application-form', 'EmployeeApplicationController@submitForm');
Route::post('/submit-employee-application', [EmployeeApplicationController::class, 'submitForm'])->name('employee-application.submit');
Route::post('/employee-application-form', [EmployeeApplicationController::class, 'submitForm'])->name('submitForm');

// Route::get('/download/paperwork', 'PaperworkController@download')->name('download.paperwork');
Route::get('/download/paperwork', 'PaperworkController@download')->name('download.paperwork')->middleware('auth');

Route::get('/quote-form', 'QuoteController@showForm');
Route::post('/submit-quote', 'QuoteController@store')->name('quote.store');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|run now
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/quote', function () {
    return view('quote');
})->name('quote');
Route::get('/employeeApplication', function () {
    return view('employeeApplication');
})->name('employeeApplication');
Route::get('/dispatchpage', function () {
    return view('dispatchpage');
})->name('dispatchpage');
Route::get('/Adminlogin', function () {
    return view('Adminlogin');
})->name('Adminlogin');
Route::get('/hotshot', function () {
    return view('hotshot');
})->name('hotshot');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
