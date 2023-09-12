z
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaginationController;

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/blogs/create', [DashboardController::class, 'create'])->name('blog.create');
    // REPORT
    Route::get('/blogs/{blog}/report', [DashboardController::class, 'reportBlog'])->name('blog.report');
    Route::post('/blogs/{blog}/report', [DashboardController::class, 'storeReport'])->name('blog.report.store');
    // ADMIN
    Route::get('/blogs/reports', [DashboardController::class, 'reports'])->name('blog.reports');
    Route::get('/blogs/reports/{report}', [DashboardController::class, 'showReport'])->name('blog.report.show');
    Route::post('/blogs/reports/{report}/delete', [DashboardController::class, 'deleteReport'])->name('blog.report.delete');
    // BLOG
    Route::get('/blogs/{blog}', [DashboardController::class, 'show'])->name('blog.show');
    Route::post('/blogs/{blog}/comment', [DashboardController::class, 'addComment'])->name('blog.comment');
    Route::post('/blogs/create', [DashboardController::class, 'store'])->name('blog.store');
    Route::post('/blogs/{blog}/delete', [DashboardController::class, 'deleteBlog'])->name('blog.delete');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
