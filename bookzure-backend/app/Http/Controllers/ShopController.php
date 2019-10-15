<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index($genre) {

        $books = DB::table('books')->where('genre', $genre)->get();

        return view('shop/category', ['genre' => $genre], ['books' => $books]);


    }


    public function genre($genre) {



    }


}
