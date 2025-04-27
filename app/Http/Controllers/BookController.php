<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('book.index');
    }

    public function addnewbook(){
        return view('book.add-new-book');
    }

    public function editbook(){
        return view('book.edit-book');
    }
}
