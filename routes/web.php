<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('index',[DashboardController::class, 'index'])->name('live.index');
Route::get('/',[DashboardController::class, 'main_sign_in'])->name('live.authentication.sign-in');
Route::get('/sign-up',[DashboardController::class, 'main_sign_up'])->name('live.authentication.sign-up');
Route::get('/forget-password',[DashboardController::class, 'forget_password'])->name('live.authentication.forget-password');

Route::get('/coloring-book-sign-in',[DashboardController::class, 'coloring_book_sign_in'])->name('live.coloringbook.authentication.sign-in');
Route::get('/coloring-book-sign-up',[DashboardController::class, 'coloring_book_sign_up'])->name('live.coloringbook.authentication.sign-up');
Route::get('/coloring-book-forget-password',[DashboardController::class, 'coloring_book_forget_password'])->name('live.coloringbook.authentication.forget-password');

Route::get('/coloring-book-main-dashboard',[DashboardController::class, 'coloring_book_main_dashboard'])->name('live.coloringbook.main-dashboard');
Route::get('/coloring-book-main-categories',[DashboardController::class, 'coloring_book_main_categories'])->name('live.coloringbook.dashboard.categories');
Route::get('/coloring-book-categories-content',[DashboardController::class, 'coloring_book_main_vector_content'])->name('live.coloringbook.dashboard.vector-content');
Route::get('/coloring-book-categories-content-details',[DashboardController::class, 'coloring_book_main_vector_content_details'])->name('live.coloringbook.dashboard.vector-content-details');

Route::get('/coloring-book-synced-users',[DashboardController::class, 'coloring_book_synced_users'])->name('live.coloringbook.users.synced-users');
Route::get('/coloring-book-blocked-users',[DashboardController::class, 'coloring_book_blocked_users'])->name('live.coloringbook.users.blocked-users');
Route::get('/coloring-book-deleted-users',[DashboardController::class, 'coloring_book_deleted_users'])->name('live.coloringbook.users.deleted-users');
Route::get('/changelog',[DashboardController::class, 'changelog'])->name('live.changelog');