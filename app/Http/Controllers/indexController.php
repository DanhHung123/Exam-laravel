<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    //
    public function index(Request $request) {
        $search = $request->search ?? '';
        if ($search == ''){
            $books = Book::all();
        } else{
            $books = DB::table('book')->where('title','like','%'. $search .'%')->get();
        }

        return view('index.index',compact('books','search'));
    }
}

