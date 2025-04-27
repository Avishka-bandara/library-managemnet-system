<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/member',[MemberController::class, 'index'])->name('member.view');
Route::get('/member/add-new-member',[MemberController::class, 'addNewMember'])->name('member.add-new-member');



Route::get('/book',[BookController::class, 'index'])->name('book.view');
Route::get('/book/add-new-book',[BookController::class, 'addnewbook'])->name('book.new-book');
Route::get('book/edit-book',[BookController::class, 'editbook'])->name('book.edit-book');

require __DIR__.'/auth.php';
