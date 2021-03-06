<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use App\Mail\SendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function create(){
        return view('CRUD.create');
    }

    public function showForm(BookRequest $request){
        // Query Builder
        // Elonguent
        // dd($request);
        $path = $request->file('image')->store('public/Images');
        $path = substr($path, strlen('public/'));
        $book = Book::create([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'user_id' => Auth::user()->id,
            'image' => $path
        ]);
        // dd($request->category);
        $book->category()->attach($request->category);
        return redirect(route('home'));
        // return view('home');
    }

    public function ViewAll(){
        $books = Book::all();
        return view('CRUD.view', ['datas' => $books]);
        // return view('CRUD.view)->withBooks($books);
    }

    public function ViewMyBook(){
        $books = Auth::user()->books;
        return view('CRUD.viewMy', ['datas' => $books]);
    }

    public function ViewBook($id){
        $book = Book::find($id);
        return view('CRUD.ViewBook', ['book' => $book]);
    }

    public function UpdateForm($id){
        $book = Book::find($id);
        return view('CRUD.update', ['buku' => $book]);
    }

    public function ShowUpdateForm(BookRequest $request, $id){
        $BookUpdate = Book::where('id', '=', $id)->first();

        $BookUpdate->update([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        return redirect(route('home'));
    }

    public function DeleteBuku($id){
        $BookDelete = Book::find($id);
        $BookDelete->delete();
        return redirect(route('ViewAll'))->with('success', 'Buku Berhasil Dihapus');
    }

    public function SendMail(){
        Mail::send(new SendMail());
        return redirect('/')->with('success', 'Email Berhasil Dikirim');
    }
}
