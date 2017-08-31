<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookCreateRequest;

class BookController extends Controller
{

    public function index(){
        $book_list = Book::all();
        return view('book.index', compact('book_list'));
    }

    public function create(){
        return view('book.create');
    }

    public function save(BookCreateRequest $request){
        $book = Book::create($request->all());
        $request->session()->flash('status', 'Book created successfully!');
        return redirect()->to(url('book'));
    }

    public function edit($id){
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    public function update(BookCreateRequest $request, $id){
        $book = Book::find($id);
        $book->update($request->all());
        $request->session()->flash('status', 'Book updated successfully!');
        return redirect()->to(url('book'));
    }
}
