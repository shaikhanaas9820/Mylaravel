<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\SingleActioncontroller;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\FormSubmit;
use App\Models\Customer;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function()
// {
//     return view('welcome');
// });
Route::get('/', [BasicController::class, 'index']);
// Route::get('/about', [BasicController::class, 'about']); // Method 1
Route::get('/about', 'App\Http\Controllers\BasicController@about'); // Another Method to call the controller

Route::get('/courses', SingleActioncontroller::class);

Route::resource('/photos',ResourceController::class);

Route::get('/form', [FormSubmit::class, 'index']);

Route::post('/form', [FormSubmit::class, 'submit']);

// Route::get('/form-component', [FormSubmit::class, 'formComponent']);

Route::get('/form-input', [FormSubmit::class, 'formInput']);

Route::get('/form-using-component', [FormSubmit::class, 'formusingcomponent']);

Route::get('/registration', [FormSubmit::class, 'registration'])->name('add.new');
Route::post('/registration', [FormSubmit::class, 'registration_submit']);

Route::get('/registration-view', [FormSubmit::class, 'registration_view']);
Route::get('/delete-user/{id}', [FormSubmit::class, 'delete_user'])->name('delete.user');
Route::get('/edit-user/{id}', [FormSubmit::class, 'edit_user'])->name('edit.user');

Route::get('/navbar', function()
{
    return view('navbar');
});

Route::get('/test/{name?}/{id?}', function ($name=null,$id = null) {
    $data = compact('name','id');
    return view('test')->with($data);
});
