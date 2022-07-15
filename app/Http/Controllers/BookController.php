<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Status;

class BookController extends Controller
{
    public function index(){
        //store all information from Book model to variable named books.
        $books = Book::with('status')->get();
        //send data from variable named books to view named welcome with method - compact
        return view('welcome', compact('books'));
    }

    public function create(){

        $statuses = Status::all();

        return view('books.create', compact('statuses'));
    }

    public function store(Request $request){

        $input = $request->all();

        Book::create($input);
        return redirect('/');
    }

    public function edit($book){

        $statuses = Status::all();

        $book = Book::find($book);

        return view('books.edit', compact('book', 'statuses'));        
    }

    public function update(Request $request,$book){

            $input = $request->all();

            $book = Book::find($book);
            $book->title = $input['title'];
            $book->author = $input['author'];
            $book->published = $input['published'];
            $book->status_id = $input['status_id'];

            $book->save();
            return redirect('/');
    }

    public function delete($book){

        Book::find($book)->delete();
        return redirect()->back();
    }

    public function search(){
        $search_text = $_GET['query'];
        $books = Book::where('author', 'LIKE', '%'.$search_text.'%')->with('status')->get();
        $books = Book::where('title', 'LIKE', '%'.$search_text.'%')->with('status')->get();

        return view('books.search', compact('books'));
    }
}
