<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/member',[MemberController::class, 'index'])->name('member.view');
Route::get('/view-members',[MemberController::class, 'viewMembers'])->name('member.view-members');
Route::get('/get-members',[MemberController::class, 'getMember'])->name('member.get-members');
Route::Post('/update-member/{id}',[MemberController::class, 'updateMember'])->name('member.update-member-save');
Route::post('/delete-members/{id}',[MemberController::class, 'deleteMember'])->name('member.delete-members');




Route::get('/get-member-nic/{id}', [MemberController::class, 'getMemberNic']);




// Book Routes
Route::get('/book',[BookController::class, 'index'])->name('book.view');
Route::get('/get-books',[BookController::class, 'getBook'])->name('book.get-books');
Route::Post('/delete-book/{id}',[BookController::class,'deleteBook'])->name('book.delete-book');





Route::Post('/release/release-new-book/save',[MemberController::class, 'releaseNewBook'])->name('member.release-new-book-save');
Route::get('/view-releases',[BookController::class, 'releaseBookDetail'])->name('book.view-release');