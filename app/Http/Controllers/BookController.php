<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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


    public function addNewBookSave(Request $request){
        // dd($request);

        $book = Book::where('book_isbn', $request->input('book_isbn'))->first();
        if ($book) {
            return redirect()->back()->withInput()->withErrors(['book_isbn' => 'ISBN already exists.']);
        }

        Book::create([
            'book_name' => $request->book_name,
            'book_isbn' => $request->book_isbn,
            'book_author' => $request->author,
            'book_publisher' => $request->publisher,
            'book_category' => $request->category,
            'book_quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Book added successfully.');

    }

    public function getBook(Request $request){

        $name = $request->input('book_name');
        $code = $request->input('book_isbn');

        


        $book = Book::where('book_name',$name)->where('book_isbn',$code)->get();

        if(!$book){
            return response()->json(['error' => 'Book not found']);
        }
    
        return response()->json(['data' => $book->values()]);
    }
}
