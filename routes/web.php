<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthenticateAdmin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;

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
Route::get('/', [HomeController::class, 'home']);

Route::post('/submit-form', [ContactController::class, 'store'])->name('submit.form');
Route::post('/submit-article', [FormController::class, 'store'])->name('submit.article');

 Route::middleware(['auth', AuthenticateAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home']);
 });
Route::get('/form', [AdminController::class, 'index'])->name('forms.index');
Route::get('/contact', [AdminController::class, 'showContacts'])->name('contacts.index');
// web.php

Route::delete('/form/{id}', [AdminController::class, 'delete'])->name('destroy.form');
Route::delete('/contact/{id}', [AdminController::class, 'destroy'])->name('delete.form');


Route::get('/view-pdf/{id}', [AdminController::class, 'viewPDF'])->name('view.pdf');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register']);
