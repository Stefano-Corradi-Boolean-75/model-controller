<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PageController extends Controller
{
    public function index(){
        $saluto = 'Ciao Controller';
        return view('home', compact('saluto'));
    }

    public function about(){
        return view('about');
    }

    public function libri(){

        // query al db
        // ottengo tutti i record della tabella books
        $books = Book::all(); // SELECT * FROM books

        // con find la ricerca avviene solo sulla colonna id
       // $book = Book::find(2); // SELECT * FROM books WHERE id = 2 // restituisce un singolo oggetto

        // con where posso fare ricerche su tutte le colonne
      //  $book = Book::where('id',2)->get(); // SELECT * FROM books WHERE id = 2 // restituisce un array di oggetti

       // $book = Book::where('id',2)->first(); // SELECT * FROM books WHERE id = 2 // restituisce un oggetto della prima occorrenza

        //$books = Book::where('title','like','%della%')->get(); // SELECT * FROM books WHERE title LIKE '%della%'

       // $books = Book::where('title','!=','Cronache di un gatto viaggiatore')->get(); // SELECT * FROM books WHERE title <> 'Cronache di un gatto viaggiatore'

       //$books = Book::where('id','>',4)->orderBy('title', 'desc')->get();


        //dd($book);

        return view('libri', compact('books'));
    }

    public function bookDetail($id){

        $book = Book::find($id);

        if(is_null($book)){
            abort(404);
        }

        return view('book-detail', compact('book'));
    }


}
