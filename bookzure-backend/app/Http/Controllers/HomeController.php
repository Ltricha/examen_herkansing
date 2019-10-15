<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index() {

        $books = DB::table('books')->get();

        return view('home', ['books' => $books]);
    }

}
