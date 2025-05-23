<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\financeController;
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
Route::get('/get-members',[MemberController::class, 'getMember'])->name('member.get-members');
Route::get('/member/add-new-member',[MemberController::class, 'addNewMember'])->name('member.add-new-member');
Route::Post('/member/add-new-member/save',[MemberController::class, 'addNewMemberSave'])->name('member.add-new-member-save');
Route::get('/member/edit-member/{id}',[MemberController::class, 'editMember'])->name('member.get-edit-member');





Route::get('/book',[BookController::class, 'index'])->name('book.view');
Route::get('/book/add-new-book',[BookController::class, 'addnewbook'])->name('book.new-book');
Route::get('book/edit-book/{id}',[BookController::class, 'editbook'])->name('book.edit-book');
Route::Post('/book/add-new-book/save',[BookController::class, 'addNewBookSave'])->name('book.add-new-book-save');




Route::get('/release/new-release',[BookController::class, 'newBookRelease'])->name('book.new-release');
Route::Post('/release/release-new-book/save',[MemberController::class, 'releaseNewBook'])->name('member.release-new-book-save');
Route::get('/view-releases',[BookController::class, 'viewBookRelease'])->name('book.view-release');



Route::get('account/finance', [financeController::class, 'index'])->name('account.finance');
require __DIR__.'/auth.php';
