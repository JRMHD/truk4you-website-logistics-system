<?php

use App\Http\Controllers\PaperworkController;
use App\Http\Controllers\EmployeeApplicationController;
use App\Http\Controllers\FormDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;


Route::post('/submit', [FormDataController::class, 'store'])->name('submit');
Route::get('/quote', 'FormDataController@create')->name('quote');



Route::post('/submit-employee-application', [EmployeeApplicationController::class, 'submitForm'])->name('employee-application.submit');
Route::post('/employee-application-form', [EmployeeApplicationController::class, 'submitForm'])->name('submitForm');



Route::get('/download/paperwork', [PaperworkController::class, 'downloadFiles'])->name('download.paperwork')->middleware('auth');



Route::get('/download-file1', [PaperworkController::class, 'downloadFile1'])->name('download.file1')->middleware('auth');
Route::get('/download-file2', [PaperworkController::class, 'downloadFile2'])->name('download.file2')->middleware('auth');

Route::get('/quote-form', 'QuoteController@showForm')->name('quote-form');
Route::post('/submit-quote', [QuoteController::class, 'store'])->name('quote.store');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact', 'ContactController@showForm')->name('contact.show');


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

Route::get('/success', function () {
    return view('success');
});Route::get('/', function () {
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
