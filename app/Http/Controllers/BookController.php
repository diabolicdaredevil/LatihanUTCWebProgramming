<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function home(){
        $catnav = Category::all();

        $book_list = DB::table('books')
            ->join('details', 'books.id', '=', 'details.book_id')
            ->select('books.*', 'details.*', 'books.id as id_book', 'details.id as id_detail')
            ->get();

        return view('home', ['catnav'=>$catnav, 'books'=>$book_list]);
    }

    public function detail($id){
        $catnav = Category::all();

        $book_detail = DB::table('books')
        ->join('details', 'books.id', '=', 'details.book_id')
        ->select('books.*', 'details.*', 'books.id as id_book', 'details.id as id_detail')
        ->where('books.id', $id)
        ->get();

        return view('detail', ['catnav'=>$catnav, 'b'=>$book_detail]);
    }

    public function category($id){
        $catnav = Category::all();

        $book_list = DB::table('books')
            ->join('details', 'books.id', '=', 'details.book_id')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'details.*', 'books.id as id_book', 'details.id as id_detail', 'categories.id as id_category')
            ->where('categories.id', $id)
            ->get();

        $cat = Category::find($id);

        $count = DB::table('books')
            ->join('details', 'books.id', '=', 'details.book_id')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select(DB::raw('count(books.id)'))
            ->where('categories.id', $id)
            ->get();
        

        return view('category', ['catnav'=>$catnav, 'books'=>$book_list, 'cat'=>$cat, 'c'=>$count]);
    }

    public function contact(){
        $catnav = Category::all();
        return view('contact', ['catnav'=>$catnav]);
    }
}
