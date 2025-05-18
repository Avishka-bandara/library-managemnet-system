<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Book;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\BookRelease;

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
            'quantity' => $request->quantity,
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

    public function newBookRelease(){

        $books = Book::all();
        $members = Member::all();
        $date = Carbon::now()->format('Y-m-d');
        return view('book.release-book', compact('books', 'members', 'date'));
    }

    public function viewBookRelease(){
      return view ('book.view-release');
    }

    public function releaseBookDetail(Request $request){

        $book = $request->input('book_name');
        $code = $request->input('book_isbn');

        $data = DB::table('book_released_detail as release')
            ->join('book as book', 'release.book_id', '=', 'book.id')
            ->join('table_member_detail as member', 'release.member_id', '=', 'member.id')
            ->where('book.book_name', $book)
            ->where('book.book_isbn', $code)
            ->select('book.book_name', 
                    'book.book_isbn as code',
                    'member.member_name',
                    'release.released_date',
                    'release.returned_date',
                    'release.id')
            ->get();
            
        
        return response()->json(['data' => $data->values()],200);

       
    }
}
