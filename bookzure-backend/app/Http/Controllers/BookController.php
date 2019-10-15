<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    public function index($id) {

        $book = Book::find($id);
        return view('book/details', ['book' => $book]);
    }


}
